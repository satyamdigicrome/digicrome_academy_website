<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Course;


class LeadsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'profession' => 'nullable|string|max:255',
            'course_id' => 'required|exists:courses,id',
        ]);

        // Get brochure path
        $course = Course::find($request->course_id);
        $brochurePath = $course->browser ? asset('storage/' . $course->browser) : null;

        if ($error = $this->submitToWebsiteLeadApi([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->mobile,
            'address' => $request->address,
            'profession' => $request->profession,
            'designation' => $request->title,
            'course' => $course->name,
            'country' => 'India',
        ])) {
            return response()->json(['success' => false, 'message' => $error], 502);
        }

        Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->mobile,
            'address' => $request->address,
            'qualification' => $request->title,
            'experience' => $request->profession,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Lead saved successfully.',
            'download_url' => $brochurePath,
        ]);
    }
    public function leadsstore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'key1' => 'nullable|string|max:255',
            'key2' => 'nullable|string|max:255',
            'key3' => 'nullable|string|max:255',
            'key4' => 'nullable|string|max:255',
            'key5' => 'nullable|string|max:255',
            'page_name' => 'nullable|string|max:255',
        ]);

        if ($error = $this->submitToWebsiteLeadApi($this->websiteLeadPayload($validated))) {
            return back()->withInput()->withErrors(['lead' => $error]);
        }

        Lead::create($validated);
        Mail::send('emails.lead-notification', ['data' => $validated], function ($message) use ($validated) {
            $message->to('digicromeleads@gmail.com')
                ->subject('New Lead Submission - ' . ($validated['page_name'] ?? 'Course Page'));
        });

        return redirect()->route('thank.you');
    }


    public function landingstore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'key1' => 'nullable|string|max:255',
            'key2' => 'nullable|string|max:255',
            'key3' => 'nullable|string|max:255',
            'key4' => 'nullable|string|max:255',
            'key5' => 'nullable|string|max:255',
            'page_name' => 'nullable|string|max:255',
        ]);

        // Optional: Get brochure URL from course
        $course = Course::where('course_free', 1)->first();
        $brochureUrl = $course && $course->browser ? asset('storage/' . $course->browser) : null;

        if ($error = $this->submitToWebsiteLeadApi($this->websiteLeadPayload($validated))) {
            return back()->withInput()->withErrors(['lead' => $error]);
        }

        // Store lead
        Lead::create($validated);

        // Send mail
        Mail::send('emails.lead-notification', ['data' => $validated], function ($message) use ($validated) {
            $message->to('digicromeleads@gmail.com')
                ->subject('New Lead Submission - ' . ($validated['page_name'] ?? 'Course Page'));
        });

        // Redirect to thank you with brochure URL in session
        return redirect()->route('thankyou')->with('brochure', $brochureUrl);
    }

    /**
     * Accepts the older website popup field names and forwards them to the CRM.
     */
    public function websiteLead(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|required_without_all:mobile,phone,number',
            'mobile' => 'nullable|string|max:255|required_without_all:email,phone,number',
            'phone' => 'nullable|string|max:255|required_without_all:email,mobile,number',
            'number' => 'nullable|string|max:255|required_without_all:email,mobile,phone',
            'alternative_phone' => 'nullable|string|max:255',
            'altr_mobile' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'profession' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'course' => 'nullable|string|max:255',
            'page_name' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
        ]);

        $number = $request->input('number') ?: ($request->input('mobile') ?: $request->input('phone'));
        $error = $this->submitToWebsiteLeadApi([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'number' => $number,
            'alternative_phone' => ' ',
            'address' => $request->input('address'),
            'state' => ' ',
            'country' => $request->input('country', 'India'),
            'profession' => $request->input('profession') ?: $request->input('experience') ?? '',
            'designation' => ' ',
            'course_id' => $request->title == 'AISS' ? '2' : '1',
            'lead_source' => 'Website',
            'lead_source_details' => $request->input('page_name') ?: $request->input('source'),
        ]);
        if ($error !== null) {
            return back()->withInput()->withErrors(['lead' => $error]);
        }

        return redirect()->route('thank.you');
    }

    /**foo
     * Submit a lead to the demo CRM using the signed JSON contract.
     *
     * @return string|null An error message, or null when the CRM accepted the lead.
     */
    private function submitToWebsiteLeadApi(array $payload): ?string
    {
        $config = config('services.lead_integration');
        $url = (string) ($config['url'] ?? '');
        $apiKey = (string) ($config['api_key'] ?? '');
        $secret = (string) ($config['api_secret'] ?? '');

        if ($url === '' || $apiKey === '' || $secret === '') {
            Log::error('Website lead API is not configured.');

            return 'Lead service is temporarily unavailable.';
        }

        $body = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        if ($body === false) {
            Log::error('Website lead API payload could not be encoded.', ['json_error' => json_last_error_msg()]);

            return 'Lead service is temporarily unavailable.';
        }

        $timestamp = (string) now()->timestamp;
        $signature = hash_hmac('sha256', $timestamp . '.' . $body, $secret);

        try {
            $response = Http::acceptJson()
                ->timeout((int) ($config['timeout'] ?? 10))
                ->withHeaders([
                    'X-Lead-Api-Key' => $apiKey,
                    'X-Lead-Timestamp' => $timestamp,
                    'X-Lead-Signature' => $signature,
                ])
                ->withBody($body, 'application/json')
                ->post($url);
        } catch (\Throwable $exception) {
            Log::error('Website lead API request failed.', ['exception' => $exception->getMessage()]);

            return 'Lead service is temporarily unavailable.';
        }

        if (! $response->successful()) {
            Log::warning('Website lead API rejected a lead.', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);

            return 'Unable to submit your details right now. Please try again.';
        }

        return null;
    }

    private function websiteLeadPayload(array $lead): array
    {
        return [
            'name' => $lead['name'],
            'email' => $lead['email'],
            'number' => $lead['phone'],
            'address' => $lead['address'] ?? null,
            'profession' => $lead['experience'] ?? null,
            'designation' => $lead['qualification'] ?? null,
            'course' => $lead['page_name'] ?? null,
            'country' => 'India',
        ];
    }
}
