@extends('layouts.app')
@section('content')
<div id="body">
    <h1><span>let's keep in touch</span></h1>
    <form action="contact.html">
        <input type="text" name="fname" id="fname" value="name">
        <input type="text" name="address" id="address" value="address">
        <input type="text" name="email" id="email" value="email">
        <input type="text" name="phone" id="phone" value="phone number">
        <textarea name="message" id="message">message</textarea>
        <input type="submit" name="send" id="send" value="send">
    </form>
</div>
<div id="footer">
    <div>
        <p>&copy; 2023 by Mustacchio. All rights reserved.</p>
        <ul>
            <li>
                <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
            </li>
            <li>
                <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
            </li>
            <li>
                <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
            </li>
            <li>
                <a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
            </li>
        </ul>
    </div>
</div>
@endsection
