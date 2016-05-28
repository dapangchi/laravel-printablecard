<div id="bubbles-box">
    @foreach($images as $i => $img)
    <div id="image{{ $img->id }}">
        @foreach($img->bubbles as $bubble)
            <a class="bubble" href="{{ $bubble->link }}" style="display:none; left:{{ $bubble->posx }}%; top:{{ $bubble->posy }}%;" target="_blank">{{ $bubble->label }}</a>  
        @endforeach
    </div>
    @endforeach
</div>