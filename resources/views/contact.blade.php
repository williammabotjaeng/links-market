@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <br />
    <div class="container" style="height: 80vh; overflow-y: hidden">
        <h3 class="title">Get in Touch</h3>

        <div class="columns">
            <div class="column is-half">
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
                            <textarea rows="3" class="textarea" placeholder="Your Message" required></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-link" style="background: linear-gradient(to right, #008c8c, #005757);">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="column is-half">
                <h2 class="subtitle has-text-bold"><strong>Our Location</strong></h2>
                <p>
                    You can also reach us at our office:
                </p>
                <br>
                <address>
                    <strong>LinksMarket</strong><br>
                    123 Marketing Ave,<br>
                    Suite 456,<br>
                    City, State, ZIP<br>
                </address>
                <br>
                <a href="mailto:info@linksmarket.com">info@linksmarket.com</a>
            </div>
        </div>
    </div>
@endsection