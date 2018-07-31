<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="section-title">
                <h2>Contact Me</h2>
            </div>
            <form class="contact-form" action="{{ route('experience.store')}}" method="post"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text"name='duration' placeholder="Duration">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name='company_name' placeholder="Company">
                    </div>
                    <div class="col-md-12">
                        <input type="text" name='position' placeholder="Position">
                    </div>
                    <div class="col-md-12">
                        <input type="text" name='message' placeholder="Message">
                    </div>
                    <div>
                        <input type='hidden' name='_token' value='{{csrf_token()}}'>
                    </div>

                </div>
                <div class="text-md-right">
                    <button class="site-btn">Send message</button>
                </div>
            </form>
        </div>
    </div>
</div>
