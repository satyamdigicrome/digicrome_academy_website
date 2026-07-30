<h2>New Lead Submitted</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>City:</strong> {{ $data['address'] ?? '-' }}</p>
<p><strong>Qualification:</strong> {{ $data['qualification'] ?? '-' }}</p>
<p><strong>Experience:</strong> {{ $data['experience'] ?? '-' }}</p>
<p><strong>Message:</strong> {{ $data['message'] ?? '-' }}</p>

@if(!empty($data['key1']))<p><strong>Key1:</strong> {{ $data['key1'] }}</p>@endif
@if(!empty($data['key2']))<p><strong>Key2:</strong> {{ $data['key2'] }}</p>@endif
@if(!empty($data['key3']))<p><strong>Key3:</strong> {{ $data['key3'] }}</p>@endif
@if(!empty($data['key4']))<p><strong>Key4:</strong> {{ $data['key4'] }}</p>@endif
@if(!empty($data['key5']))<p><strong>Key5:</strong> {{ $data['key5'] }}</p>@endif

<p><strong>Page Name:</strong> {{ $data['page_name'] ?? 'N/A' }}</p>
