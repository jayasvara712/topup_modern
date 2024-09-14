@extends('layouts.template')
@section('content')
    <div class="container section">
        <!-- Scrollable Nav Tabs -->
        <div class="d-flex align-items-center justify-content-center mb-5 pt-5 categories">
            <div class="scrollable-tabs-container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="terms-condition-tab" data-bs-toggle="tab"
                            data-bs-target="#terms-condition" type="button" role="tab" aria-controls="home"
                            aria-selected="true">Terms and
                            Condition</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="privacy-policy-tab" data-bs-toggle="tab"
                            data-bs-target="#privacy-policy" type="button" role="tab" aria-controls="razer"
                            aria-selected="false">Privacy
                            Policy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="legal-tab" data-bs-toggle="tab" data-bs-target="#legal" type="button"
                            role="tab" aria-controls="razer" aria-selected="false">Legal</button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content Sections -->
        <div class="tab-content m-5 terms-page" id="myTabContent">
            <!-- Terms Condition -->
            <div class="tab-pane fade show active" id="terms-condition" role="tabpanel"
                aria-labelledby="terms-condition-tab">
                <h2 class="title">Terms and Condition</h2>
                <span class="subtitle">
                    Welcome to BURPIGAMES! By using this website/app, you agree to abide by the following terms and
                    conditions. Please read them carefully before proceeding.
                </span>
                <span class="desc">
                    <ol>
                        <li>
                            Acceptance of Terms
                            <br>
                            By accessing or using our website/app, you agree to these terms and conditions. If you do not
                            agree to
                            any of these terms and conditions, please do not use our website/app.
                        </li>
                        <li>
                            Use of the Website/Application
                            <br>
                            You agree to use this website/app only for lawful purposes and in accordance with applicable
                            laws. You
                            must not engage in activities that may damage, disable or limit the functionality of our
                            website/app.
                        </li>
                        <li>
                            Intellectual Property Rights
                            <br>
                            All content, including but not limited to text, graphics, logos and software, available on this
                            website/app is the copyright or trademark of [Company Name]. You may not copy, distribute or use
                            such
                            content without our written permission.
                        </li>
                        <li>
                            Confidentiality and Security
                            <br>
                            We are committed to protecting your privacy and personal information. Please read our Privacy
                            Policy for
                            more information on how we collect, use and protect your personal data.
                        </li>
                        <li>
                            User Responsibility
                            <br>
                            You are responsible for maintaining the confidentiality of your account information and all
                            activities
                            that occur under your account. Notify us immediately if you become aware of any unauthorized use
                            of your
                            account.
                        </li>
                        <li>
                            Disclaimer of Liability
                            <br>
                            This website/app is provided “as is” without warranties or representations of any kind, either
                            express
                            or implied. We are not liable for any damage or loss arising from your use or inability to use
                            this
                            website/app.
                        </li>
                        <li>
                            Changes to Terms
                            <br>
                            We reserve the right to change these terms and conditions at any time without prior notice.
                            Changes will
                            take effect as soon as they are posted on the website/app. You are expected to review these
                            terms and
                            conditions periodically.
                        </li>
                        <li>Applicable Law
                            <br>
                            These terms and conditions shall be governed and construed in accordance with the laws of the
                            Country.
                            Any disputes arising shall be resolved in court.
                        </li>
                        <li>
                            Contact
                            <br>
                            If you have any questions regarding these terms and conditions, please contact us
                            <br>
                            Email : burpigames@gmail.com
                            <br>
                            Wa: +65 9859-5906
                        </li>
                    </ol>
                </span>
            </div>
            <!-- Privacy Policy -->
            <div class="tab-pane fade show" id="privacy-policy" role="tabpanel" aria-labelledby="terms-condition-tab">
                <h2 class="title">Privacy Policy</h2>
                <span class="subtitle">
                    Welcome to BURPIGAMES! By using this website/app, you agree to abide by the following terms and
                    conditions. Please read them carefully before proceeding.
                </span>
                <span class="desc">
                    <ol>
                        <li>
                            Acceptance of Terms
                            <br>
                            By accessing or using our website/app, you agree to these terms and conditions. If you do not
                            agree to
                            any of these terms and conditions, please do not use our website/app.
                        </li>
                        <li>
                            Use of the Website/Application
                            <br>
                            You agree to use this website/app only for lawful purposes and in accordance with applicable
                            laws. You
                            must not engage in activities that may damage, disable or limit the functionality of our
                            website/app.
                        </li>
                        <li>
                            Intellectual Property Rights
                            <br>
                            All content, including but not limited to text, graphics, logos and software, available on this
                            website/app is the copyright or trademark of [Company Name]. You may not copy, distribute or use
                            such
                            content without our written permission.
                        </li>
                        <li>
                            Confidentiality and Security
                            <br>
                            We are committed to protecting your privacy and personal information. Please read our Privacy
                            Policy for
                            more information on how we collect, use and protect your personal data.
                        </li>
                        <li>
                            User Responsibility
                            <br>
                            You are responsible for maintaining the confidentiality of your account information and all
                            activities
                            that occur under your account. Notify us immediately if you become aware of any unauthorized use
                            of your
                            account.
                        </li>
                        <li>
                            Disclaimer of Liability
                            <br>
                            This website/app is provided “as is” without warranties or representations of any kind, either
                            express
                            or implied. We are not liable for any damage or loss arising from your use or inability to use
                            this
                            website/app.
                        </li>
                        <li>
                            Changes to Terms
                            <br>
                            We reserve the right to change these terms and conditions at any time without prior notice.
                            Changes will
                            take effect as soon as they are posted on the website/app. You are expected to review these
                            terms and
                            conditions periodically.
                        </li>
                        <li>Applicable Law
                            <br>
                            These terms and conditions shall be governed and construed in accordance with the laws of the
                            Country.
                            Any disputes arising shall be resolved in court.
                        </li>
                        <li>
                            Contact
                            <br>
                            If you have any questions regarding these terms and conditions, please contact us
                            <br>
                            Email : burpigames@gmail.com
                            <br>
                            Wa: +65 9859-5906
                        </li>
                    </ol>
                </span>
            </div>
            <!-- Legal -->
            <div class="tab-pane fade show" id="legal" role="tabpanel" aria-labelledby="terms-condition-tab">
                <h2 class="title">Legal</h2>
                <span class="subtitle">
                    Welcome to BURPIGAMES! By using this website/app, you agree to abide by the following terms and
                    conditions. Please read them carefully before proceeding.
                </span>
                <span class="desc">
                    <ol>
                        <li>
                            Acceptance of Terms
                            <br>
                            By accessing or using our website/app, you agree to these terms and conditions. If you do not
                            agree to
                            any of these terms and conditions, please do not use our website/app.
                        </li>
                        <li>
                            Use of the Website/Application
                            <br>
                            You agree to use this website/app only for lawful purposes and in accordance with applicable
                            laws. You
                            must not engage in activities that may damage, disable or limit the functionality of our
                            website/app.
                        </li>
                        <li>
                            Intellectual Property Rights
                            <br>
                            All content, including but not limited to text, graphics, logos and software, available on this
                            website/app is the copyright or trademark of [Company Name]. You may not copy, distribute or use
                            such
                            content without our written permission.
                        </li>
                        <li>
                            Confidentiality and Security
                            <br>
                            We are committed to protecting your privacy and personal information. Please read our Privacy
                            Policy for
                            more information on how we collect, use and protect your personal data.
                        </li>
                        <li>
                            User Responsibility
                            <br>
                            You are responsible for maintaining the confidentiality of your account information and all
                            activities
                            that occur under your account. Notify us immediately if you become aware of any unauthorized use
                            of your
                            account.
                        </li>
                        <li>
                            Disclaimer of Liability
                            <br>
                            This website/app is provided “as is” without warranties or representations of any kind, either
                            express
                            or implied. We are not liable for any damage or loss arising from your use or inability to use
                            this
                            website/app.
                        </li>
                        <li>
                            Changes to Terms
                            <br>
                            We reserve the right to change these terms and conditions at any time without prior notice.
                            Changes will
                            take effect as soon as they are posted on the website/app. You are expected to review these
                            terms and
                            conditions periodically.
                        </li>
                        <li>Applicable Law
                            <br>
                            These terms and conditions shall be governed and construed in accordance with the laws of the
                            Country.
                            Any disputes arising shall be resolved in court.
                        </li>
                        <li>
                            Contact
                            <br>
                            If you have any questions regarding these terms and conditions, please contact us
                            <br>
                            Email : burpigames@gmail.com
                            <br>
                            Wa: +65 9859-5906
                        </li>
                    </ol>
                </span>
            </div>
        </div>
    </div>
@endsection
