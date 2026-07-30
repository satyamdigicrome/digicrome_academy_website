<h2>New Job Application Received</h2>

<p><strong>Name:</strong> {{ $application->name }}</p>
<p><strong>Email:</strong> {{ $application->email }}</p>
<p><strong>Phone:</strong> {{ $application->phone }}</p>
<p><strong>Cover Letter:</strong></p>
<p>{{ $application->cover_letter }}</p>

<p><strong>Resume Link:</strong> 
    <a href="{{ asset('storage/' . $application->resume_path) }}">Download Resume</a>
</p>
