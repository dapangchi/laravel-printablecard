<div class="col-md-6">
    <div class="messages-block">
        <h4 class="fw-medium">Messages</h4>
        <div class="messages-list">
            <?php for($i=0; $i<5; $i++) { ?>
            <div class="message-item">
                <div class="message-thumb">
                    <img src="{{ asset('frontend/img/thumb-img.jpg') }}" alt="mes-auth">
                </div>
                <div class="message-body">
                    <div class="message-author fw-medium">Albert</div>
                    <div class="message-date">9 / 28 / 2015 9:50AM</div>
                    <div class="clearfix"></div>
                    <div class="message-title">Hi John, please see the proof in attachment !</div>
                    <div class="message-content">
                        Please see the proof, if it is all correct please click on approved button for sending to ps sdfsd sdfs drint
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="view-all-wrap">
            <a href="{{ route('customer.messages') }}"><button class="btn btn-cons">VIEW ALL</button></a>
        </div>
    </div>
</div>