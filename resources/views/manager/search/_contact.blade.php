<li class="list-group-item">
@foreach ($contact->businesses as $business)
    @if (auth()->user()->isOwner($business))
        {!! Button::normal($business->name)->withIcon(Icon::home())->asLinkTo(route('manager.business.show', $business)) !!}
        {!! Button::normal($contact->fullname)->withIcon(Icon::user())->asLinkTo(route('manager.business.contact.show', [$business, $contact->id])) !!}
    @endif
@endforeach
</li>