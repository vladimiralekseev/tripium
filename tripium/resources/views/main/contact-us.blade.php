<a id="contact-us" class="anchor"></a>
<div class="fixed">
    <div class="row">
        <div class="col-lg-6 mb-lg-0 mb-sm-4 mb-3">
            <h3 class="h1">
                Tripium is your dependable partner <span class="d-block c-neutral-400">you can trust</span>
            </h3>
            <div>
                Backed by decades of hands-on industry expertise and dedicated service, we makes it easier for
                destinations to offer great experiences and earn more from their guests.
            </div>
        </div>
        <div class="offset-xxl-1 col-xxl-5 col-lg-6">
            <form id="contact-us-form" action="/contact-form/store" method="post" onsubmit="return submitContactForm()">
                @csrf
                {!! RecaptchaV3::field('register') !!}
                <div class="mb-3">
                    <label for="contact-name-input" class="form-label">Contact name <span
                            class="required">*</span></label>
                    <input type="text" class="form-control" id="contact-name-input" name="contact-name"
                           placeholder="Enter your full name">
                    <div class="invalid-feedback" id="contact-name-error"></div>
                </div>
                <div class="mb-3">
                    <label for="email-input" class="form-label">E-mail <span class="required">*</span></label>
                    <input type="email" class="form-control" id="email-input" name="email"
                           placeholder="name@example.com">
                    <div class="invalid-feedback" id="email-error"></div>
                </div>
                <div class="mb-3">
                    <label for="business-input" class="form-label">Business <span class="c-neutral-400">(optional)</span></label>
                    <input type="text" class="form-control" id="business-input" name="business"
                           placeholder="Specify the type of business">
                    <div class="invalid-feedback" id="business-error"></div>
                </div>
                <div class="mb-4">
                    <label for="message-input" class="form-label">Message <span
                            class="c-neutral-400">(optional)</span></label>
                    <textarea type="text" class="form-control" id="message-input" name="message"
                              placeholder="Specify the type of business"></textarea>
                    <div class="invalid-feedback" id="message-error"></div>
                </div>
                <div id="response-error" class="text-danger mb-3"></div>
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <div class="agreement">
                        By clicking "Send", you acknowledge and consent to our Privacy Policy, including the
                        collection and use of your personal information.
                    </div>
                    <div>
                        <button class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
            <div id="response-success" class="text-success text-center"></div>
        </div>
    </div>
</div>
@push('head-scripts')
    {!! RecaptchaV3::initJs() !!}
@endpush
@push('scripts')
    <script src="https://unpkg.com/validator@latest/validator.min.js"></script>
    <script src="/js/contact-form.js"></script>
@endpush

