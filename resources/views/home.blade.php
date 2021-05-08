@extends('layouts.main')

@section('main')
    <div class="content-box">
        <header>
            <h1>The Game Organiser</h1>
            <h2>Organising board game collections and events for you and your friends</h2>
        </header>
        <div class="content-box-main">
            <p>
                Hello, welcome, and thank you for visiting The Game Organiser. As an avid gamer I have a large board
                game collection, as do most of my friends. We regularly get together to play these games but it's
                always difficult to remember exactly who has what games or who is bringing what to which games day.
            </p>
            <p>
                As a web developer I thought about a solution, what features I'd like and how I'd go about it. Once I
                had an idea in my mind of what this site should do I asked my friends if it was something they would
                use, and most of them said yes! So I set about designing and creating what you see now.
            </p>
            <p>
                The Game Organiser is currently in early alpha and as such only has the bare minimum of features that
                I want it to have. But I wanted to get it in the hands of the people I made it for, my friends, to
                get their feedback early on. They're helping me make this a tool I'll be happy to share with you all.
            </p>
            <p>
                If this is something that you think would be useful for you and your friends and you'd like to be
                kept up-to-date on the progress I'm making, informed of when the public beta is available, or perhaps
                even become an alpha tester and help shape this project, then please leave your email address below.
                I promise not to use it for anything other than the occasional email (once a month if you're lucky)
                to keep you up to date on The Game Organiser's progress.
            </p>
            <form action="{{ route('mailingSignup') }}" method="POST">
                <fieldset class="field is-grouped">
                    <label for="name" class="label">
                        Email:
                    </label>
                    <div class="control">
                        <input class="input" type="email" id="name" name="email" aria-placeholder="Email address">
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">Get Updates!</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
