<h2>New Referral Received</h2>

<p><strong>Your Name:</strong> {{ $yourName }}</p>
<p><strong>Your Email:</strong> {{ $yourEmail }}</p>
<p><strong>Your Mobile:</strong> {{ $yourPhone }}</p>

<p><strong>Friend's Name:</strong> {{ $friendName }}</p>
<p><strong>Friend's Email:</strong> {{ $friendEmail }}</p>
<p><strong>Friend's Mobile:</strong> {{ $friendPhone }}</p>

@if(!empty($personalMessage))
    <p><strong>Personal Message:</strong></p>
    <p>{{ $personalMessage }}</p>
@endif
