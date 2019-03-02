{{-- This is the default home page a.k.a landing page for the website --}}

{{-- Declare required page constants --}}
<?php
$d_page = array(
    'title' => 'Terms of Use Policy',
    'description' => 'This is the Terms and Conditions page!'
);

$statements = array(
[
    "t" => "1. <u>Introduction</u>",
    "b" => [
        ["t" => "1.1 These terms and conditions shall govern your use of our website."],
        ["t" => "1.2 By using our website, you accept these terms and conditions in full; accordingly, if you disagree with these terms and conditions or any part of these terms and conditions, you must not use our website."],
        ["t" => "1.3 If you register with our website, submit any material to our website or use any of our website services, we will ask you to expressly agree to these terms and conditions."],
        ["t" => "1.4 You must be at least 18 years of age (or have an explicit consent of your parent or guardian if you are under the age of 18) to use our website; by using our website or agreeing to these terms and conditions, you warrant and represent to us that you are at least 18 years of age or have received an explicit consent from your parent or guardian."],
        ["t" => "1.5 Our website uses cookies; by using our website or agreeing to these terms and conditions, you consent to our use of cookies in accordance with the terms of our <a href='".route('about.privacy')."' target='_blank'>privacy and cookies policy</a>."]
    ]
],
[
    "t" => "2. <u>Copyright notice</u>",
    "b" => [
        ["t" => "2.1 Copyright (c) 2017 STEM Loyola (Challenges)"],
        ["t" => "2.2 Subject to the express provisions of these terms and conditions:",
        "b" => ["(a) we, together with our licensors, own and control all the copyright and other intellectual property rights in our website and the material on our website; and", "(b) all the copyright and other intellectual property rights in our website and the material on our website are reserved."]]
    ]
],
[
    "t" => "3. <u>License to use website</u>",
    "b" => [
        ["t" => "3.1 You may:",
        "b" => ["(a) view pages from our website in a web browser;", "(b) download pages from our website for caching in a web browser;", "(c) print pages from our website;", "(d) use our website services by means of a web browser,", "subject to the other provisions of these terms and conditions."]],
        ["t" => "3.2 Except as expressly permitted by Section 3.1 or the other provisions of these terms and conditions, you must not download any material from our website or save any such material to your computer."],
        ["t" => "3.3 You may only use our website for your own personal and educational purposes, and you must not use our website for any other purposes."],
        ["t" => "3.4 Except as expressly permitted by these terms and conditions, you must not edit or otherwise modify any material on our website."],
        ["t" => "3.5 Unless you own or control the relevant rights in the material, you must not:",
        "b" => ["(a) republish material from our website (including republication on another website);", "(b) sell, rent or sub-license material from our website;", "(c) show any material from our website in public;", "(d) exploit material from our website for a commercial purpose; or", "(e) redistribute material from our website."]],
        ["t" => "3.6 We reserve the right to restrict access to areas of our website, or indeed our whole website, at our discretion; you must not circumvent or bypass, or attempt to circumvent or bypass, any access restriction measures on our website."]
    ]
],
[
    "t" => "4. <u>Acceptable use</u>",
    "b" => [
        ["t" => "4.1 You must not:",
        "b" => ["(a) use our website in any way or take any action that causes, or may cause, damage to the website or impairment of the performance, availability or accessibility of the website;", "(b) use our website in any way that is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity;", "(c) use our website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software;", "(d) conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to our website without our express written consent;", "(e) access or otherwise interact with our website using any robot, spider or other automated means, except for the purpose of search engine indexing;", "(f) violate the directives set out in the robots.txt file for our website; or", "(g) use data collected from our website for any direct marketing activity (including without limitation email marketing, SMS marketing, telemarketing and direct mailing)."]],
        ["t" => "4.2 You must not use data collected from our website to contact individuals, companies or other persons or entities."],
        ["t" => "4.3 You must ensure that all the information you supply to us through our website, or in relation to our website, is true, accurate, current, complete and non-misleading."]
    ]
],
[
    "t" => "5. <u>Registration and accounts</u>",
    "b" => [
        ["t" => "5.1 To be eligible for an account on our website under this Section 5, you must be resident or situated in the United Republic of Tanzania."],
        ["t" => "5.2 You may register for an account with our website by completing and submitting the account registration form on our website, clicking on the confirmation link in the email that the website will send to you, and supply the verification code in the text message that the website will send to your phone number."],
        ["t" => "5.3 You must not allow any other person to use your account to access the website."],
        ["t" => "5.4 You must notify us in writing immediately if you become aware of any unauthorised use of your account."],
        ["t" => "5.5 You must not use any other person's account to access the website, unless you have that person's express permission to do so."]
    ]
],
[
    "t" => "6. <u>User login details</u>",
    "b" => [
        ["t" => "6.1 If you register for an account with our website, you will be asked to choose a user ID and password."],
        ["t" => "6.2 Your user ID must not be liable to mislead and must comply with the content rules set out in Section 9; you must not use your account or user ID for or in connection with the impersonation of any person."],
        ["t" => "6.3 You must keep your password confidential."],
        ["t" => "6.4 You must notify us in writing immediately if you become aware of any disclosure of your password."],
        ["t" => "6.5 You are responsible for any activity on our website arising out of any failure to keep your password confidential, and may be held liable for any losses arising out of such a failure."]
    ]
],
[
    "t" => "7. <u>Cancellation and suspension of account</u>",
    "b" => [
        ["t" => "7.1 We may:",
        "b" => ["(a) suspend your account;", "(b) cancel your account; and/or", "(c) edit your account details,", "at any time in our sole discretion without notice or explanation."]],
        ["t" => "7.2 You may cancel your account on our website by contacting us directly."]
    ]
],
[
    "t" => "8. <u>Your content: license</u>",
    "b" => [
        ["t" => "8.1 In these terms and conditions, \"your content\" means all works and materials (including without limitation text, graphics, images, audio material, video material, audio-visual material, scripts, software and files) that you submit to us or our website for storage or publication on, processing by, or transmission via, our website."],
        ["t" => "8.2 You grant to us a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, store, adapt, publish, translate and distribute your content in any existing or future media in relation to this website and any successor website."],
        ["t" => "8.3 You grant to us the right to sub-license the rights licensed under Section 8.2."],
        ["t" => "8.4 You grant to us the right to bring an action for infringement of the rights licensed under Section 8.2."],
        ["t" => "8.5 You hereby waive all your moral rights in your content to the maximum extent permitted by applicable law; and you warrant and represent that all other moral rights in your content have been waived to the maximum extent permitted by applicable law."],
        ["t" => "8.6 You may edit your content to the extent permitted using the editing functionality made available on our website."],
        ["t" => "8.7 Without prejudice to our other rights under these terms and conditions, if you breach any provision of these terms and conditions in any way, or if we reasonably suspect that you have breached these terms and conditions in any way, we may delete, unpublish or edit any or all of your content."]
    ]
],
[
    "t" => "9. <u>Your content: rules</u>",
    "b" => [
        ["t" => "9.1 You warrant and represent that your content will comply with these terms and conditions."],
        ["t" => "9.2 Your content must not be illegal or unlawful, must not infringe any person's legal rights, and must not be capable of giving rise to legal action against any person (in each case in any jurisdiction and under any applicable law)."],
        ["t" => "9.3 Your content, and the use of your content by us in accordance with these terms and conditions, must not:",
        "b" => ["(a) be libellous or maliciously false;", "(b) be obscene or indecent;", "(c) infringe any copyright, moral right, database right, trade mark right, design right, right in passing off, or other intellectual property right;", "(d) infringe any right of confidence, right of privacy or right under data protection legislation;", "(e) constitute negligent advice or contain any negligent statement;", "(f) constitute an incitement to commit a crime, instructions for the commission of a crime or the promotion of criminal activity;", "(g) be in contempt of any court, or in breach of any court order;", "(h) be in breach of racial or religious hatred or discrimination legislation;", "(i) be blasphemous;", "(j) be in breach of official secrets legislation;", "(k) be in breach of any contractual obligation owed to any person;", "(l) depict violence in an explicit, graphic or gratuitous manner;", "(m) be pornographic, lewd, suggestive or sexually explicit;", "(n) be untrue, false, inaccurate or misleading;", "(o) consist of or contain any instructions, advice or other information which may be acted upon and could, if acted upon, cause illness, injury or death, or any other loss or damage;", "(p) constitute spam;", "(q) be offensive, deceptive, fraudulent, threatening, abusive, harassing, anti-social, menacing, hateful, discriminatory or inflammatory."]]
    ]
],
[
    "t" => "10. <u>Limited warranties</u>",
    "b" => [
        ["t" => "10.1 We do not warrant or represent:",
        "b" => ["(a) the completeness or accuracy of the information published on our website;", "(b) that the material on the website is up to date; or", "(c) that the website or any service on the website will remain available."]],
        ["t" => "10.2 We reserve the right to discontinue or alter any or all of our website services, and to stop publishing our website, at any time in our sole discretion without notice or explanation; and save to the extent expressly provided otherwise in these terms and conditions, you will not be entitled to any compensation or other payment upon the discontinuance or alteration of any website services, or if we stop publishing the website."],
        ["t" => "10.3 To the maximum extent permitted by applicable law and subject to Section 11.1, we exclude all representations and warranties relating to the subject matter of these terms and conditions, our website and the use of our website."]
    ]
],
[
    "t" => "11. <u>Limitations and exclusions of liability</u>",
    "b" => [
        ["t" => "11.1 Nothing in these terms and conditions will:",
        "b" => ["(a) limit or exclude any liability for death or personal injury resulting from negligence;", "(b) limit or exclude any liability for fraud or fraudulent misrepresentation;", "(c) limit any liabilities in any way that is not permitted under applicable law; or", "(d) exclude any liabilities that may not be excluded under applicable law."]],
        ["t" => "11.2	The limitations and exclusions of liability set out in this Section 11 and elsewhere in these terms and conditions:",
        "b" => ["(a) are subject to Section 11.1; and", "(b) govern all liabilities arising under these terms and conditions or relating to the subject matter of these terms and conditions, including liabilities arising in contract, in tort (including negligence) and for breach of statutory duty, except to the extent expressly provided otherwise in these terms and conditions."]],
        ["t" => "11.3	To the extent that our website and the information and services on our website are provided free of charge, we will not be liable for any loss or damage of any nature."],
        ["t" => "11.4	We will not be liable to you in respect of any losses arising out of any event or events beyond our reasonable control."],
        ["t" => "11.5	We will not be liable to you in respect of any business losses, including (without limitation) loss of or damage to profits, income, revenue, use, production, anticipated savings, business, contracts, commercial opportunities or goodwill."],
        ["t" => "11.6	We will not be liable to you in respect of any loss or corruption of any data, database or software."],
        ["t" => "11.7	We will not be liable to you in respect of any special, indirect or consequential loss or damage."],
        ["t" => "11.8	You accept that we have an interest in limiting the personal liability of our employees and, having regard to that interest, you acknowledge that we are a limited liability entity; you agree that you will not bring any claim personally against our employees in respect of any losses you suffer in connection with the website or these terms and conditions (this will not, of course, limit or exclude the liability of the limited liability entity itself for the acts and omissions of our employees)."]
    ]
],
[
    "t" => "12. <u>Breaches of these terms and conditions</u>",
    "b" => [
        ["t" => "12.1 Without prejudice to our other rights under these terms and conditions, if you breach these terms and conditions in any way, or if we reasonably suspect that you have breached these terms and conditions in any way, we may:",
        "b" => ["(a) send you one or more formal warnings;", "(b) temporarily suspend your access to our website;", "(c) permanently prohibit you from accessing our website;", "(d) temporarily or permanently block computers using your IP address from accessing our website;", "(e) contact any or all of your Internet service providers and request that they block your access to our website;", "(f) commence legal action against you, whether for breach of contract or otherwise; and/or", "(g) suspend or delete your account on our website."]],
        ["t" => "12.2	Where we suspend or prohibit or block your access to our website or a part of our website, you must not take any action to circumvent such suspension or prohibition or blocking (including without limitation creating and/or using a different account)."]
    ]
],
[
    "t" => "13. <u>Variation</u>",
    "b" => [
        ["t" => "13.1 We may revise these terms and conditions from time to time."],
        ["t" => "13.2 We will give you written notice of any revision of these terms and conditions, and the revised terms and conditions will apply to the use of our website from the date that we give you such notice; if you do not agree to the revised terms and conditions, you must stop using our website."],
        ["t" => "13.3 If you have given your express agreement to these terms and conditions, we will ask for your express agreement to any revision of these terms and conditions; and if you do not give your express agreement to the revised terms and conditions within such period as we may specify, we will disable or delete your account on the website, and you must stop using the website."]
    ]
],
[
    "t" => "14. <u>Assignment</u>",
    "b" => [
        ["t" => "14.1 You hereby agree that we may assign, transfer, sub-contract or otherwise deal with our rights and/or obligations under these terms and conditions."],
        ["t" => "14.2 You may not without our prior written consent assign, transfer, sub-contract or otherwise deal with any of your rights and/or obligations under these terms and conditions."],
    ]
],
[
    "t" => "15. <u>Severability</u>",
    "b" => [
        ["t" => "15.1 If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect."],
        ["t" => "15.2 If any unlawful and/or unenforceable provision of these terms and conditions would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect."]
    ]
],
[
    "t" => "16. <u>Third party rights</u>",
    "b" => [
        ["t" => "16.1 A contract under these terms and conditions is for our benefit and your benefit, and is not intended to benefit or be enforceable by any third party."],
        ["t" => "16.2 The exercise of the parties' rights under a contract under these terms and conditions is not subject to the consent of any third party."]
    ]
],
[
    "t" => "17. <u>Entire agreement</u>",
    "b" => [
        ["t" => "17.1 Subject to Section 11.1, these terms and conditions, together with our privacy and cookies policy, shall constitute the entire agreement between you and us in relation to your use of our website and shall supersede all previous agreements between you and us in relation to your use of our website."]
    ]
],
[
    "t" => "18. <u>Law and jurisdiction</u>",
    "b" => [
        ["t" => "18.1 These terms and conditions shall be governed by and construed in accordance with the United Republic of Tanzanian law."],
        ["t" => "18.2 Any disputes relating to these terms and conditions shall be subject to the non-exclusive jurisdiction of the courts of the United Republic of Tanzania."]
    ]
],
[
    "t" => "19. <u>Our details</u>",
    "b" => [
        ["t" => "19.1 This website is owned and operated by STEM Loyola (Challenges)."],
        ["t" => "19.2 We are registered in Tanzania."],
        ["t" => "19.3 You can contact us:",
        "b" => ["(a) using our website contact form;", "(b) by telephone, on the contact number published on our website from time to time; or", "(c) by email, using the email address published on our website from time to time."]]
    ]
]
);
?>

{{-- Build this page off the base page template --}}
@extends('layouts.default')


{{--
  -- Define the page top bar
  --}}
@section('top-bar')
    @include('partials.default-top-bar')
@stop


{{--
  -- Define the page body
  --}}
@section('body')
    <?php $menu = 'terms'; ?>
    @include('partials.menu-about')

    <div class=" row">
        <h2 class="sl-ospace-1 sl-center-c">{{ $d_page['title'] }}</h2>
    </div>
    <div class="row sl-legal">
        @foreach ($statements as $stm)
            <h4 class="sl-ospace-1">{!! $stm['t'] !!}</h4>
            @foreach ($stm['b'] as $stmBody)
                <span class="b1">{!! $stmBody['t'] !!}</span>
                @if(isset($stmBody['b']))
                    @foreach($stmBody['b'] as $stmBodyItem)
                        <span class="b2">{!! $stmBodyItem !!}</span>
                    @endforeach
                @endif
            @endforeach
        @endforeach
    </div>
    <div class="sl-ospace-3"></div>
@stop


{{--
  -- Define the page footer
  --}}
@section('footer')
  @include('partials.default-footer')
@stop
