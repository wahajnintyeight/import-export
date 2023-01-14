<x-mail::panel>
    # A new Contact Query has sent to you!

    Hello,

    Full Name: {{ $fullname }}
    Email: {{ $mailfrom }}
    Phone Number: {{ $phone }}
    Message: {{ $message }}

    Thanks,
    {{ config('app.name') }}
</x-mail::panel>
