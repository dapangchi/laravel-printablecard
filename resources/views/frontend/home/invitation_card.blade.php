<div class="full-width-wrap">
    <div class="container section sect2">
        <div class="row">
            <div class="col-md-12 col-sm-12 section-title">
                <h1>INVITATION CARDS</h1>
                <h4>BE UNIQUE FOR YOUR PARTIES</h4>
            </div>
            
            @if($invitation_card_categories->count() > 0)
            <?php $r = $invitation_card_categories[0]; ?>
            <div class="col-md-8 col-sm-12">
                <a href='{{ $r->getUrl() }}'>
                    <div class="big-inv-img-wrap" style="background-image:url({{ asset($invitation_card_categories[0]->image) }})">
                        <h3>{{ $invitation_card_categories[0]->name }}</h3>
                    </div>
                </a>
            </div>
            
            @if($invitation_card_categories->count() > 0)
                @for($i = 1; $i < $invitation_card_categories->count(); $i++)
                <?php $r = $invitation_card_categories[$i]; ?>
                <div class="col-md-4 col-sm-6">
                    <a href='{{ $r->getUrl() }}'>
                        <div class="small-inv-img-wrap1" style="background-image:url({{ asset($invitation_card_categories[$i]->image) }})">
                            <h3>{{ $invitation_card_categories[$i]->name }}</h3>
                        </div>
                    </a>
                </div>
                @endfor
            @endif
            
            @endif
            
            <div class="col-md-12 col-sm-12 section-foot">
                <div class="button-wrap">
                    <a href="#">
                        <span class="lg-but inv-teml-but">VIEW INVITATION TEMPLATES</span>
                    </a>
                </div>
                <h4>FREE FOR ROCKDESIGN PRINT CUSTOMERS</h4>
            </div>
        </div>
    </div>
</div>