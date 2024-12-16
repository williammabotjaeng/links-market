@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <br />
    <div class="container">
        <h1 class="title">Contact Us</h1>
        <p>
            We would love to hear from you! Whether you have a question, feedback, or need assistance, feel free to reach out to us using the form below.
        </p>
        
        <h2 class="subtitle">Get in Touch</h2>
        <form>
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Your Name" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" placeholder="Your Email" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Your Message" required></textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link">Send Message</button>
                </div>
            </div>
        </form>

        <h2 class="subtitle">Our Location</h2>
        <p>
            You can also reach us at our office:
        </p>
        <address>
            <strong>LinksMarket</strong><br>
            123 Marketing Ave,<br>
            Suite 456,<br>
            City, State, ZIP<br>
            <a href="mailto:info@linksmarket.com">info@linksmarket.com</a>
        </address>
    </div>
@endsection