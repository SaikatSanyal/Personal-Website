<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="section-title">
                <h2>Create Time Line </h2>
            </div>
            <form class="contact-form" action="{{ route('timelines.store')}}" method="post"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text"name='year' placeholder="year">
                    </div>
                    <div class="col-md-6">
                        <input type="text"name='info' placeholder="info">
                    </div>
                    <div>
                        <input type='hidden' name='_token' value='{{csrf_token()}}'>
                    </div>

                </div>
                <div class="text-md-right">
                    <button class="site-btn">create Time Line</button>
                </div>
            </form>
        </div>
    </div>
</div>
