<?php

$defaultPhases = [
    ['title' => 'Customer file', 'content' => 'You will need to provide us your information, files such as logo, photo etc. (we only accept vector format for logo)'],
    ['title' => 'Idea + Brainstorm', 'content' => 'We understand your target market, industry, and style you are looking for'],
    ['title' => 'Design', 'content' => 'Our professional designer will start designing based on the customer\'s information'],
    ['title' => 'Revisions', 'content' => 'We will modify the designs according to customer\'s request'],
    ['title' => 'Turnaround Time', 'content' => 'Turnaround Time'],
];

?>

<div class="table-responsive">
    <table id="phase-table" class="table table-border">
    <colgroup>
        <col width="80"/>
        <col width="250"/>
        <col width=""/>
        <col width="50"/>
    </colgroup>
    <thead>
        <tr>
            <th class="text-center"></th>
            <th>Title</th>
            <th class="text-center">Description</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($defaultPhases as $i => $dp)
        <?php $index = $i+1; ?>
        <tr class="new">
            <td>
                <input type="hidden" class="phase-icon-type formdata" name="phase[][icon-type]" value="{{ $index }}"/>
                <input type="hidden" class="phase-icon-path formdata" name="phase[][icon-path]" value=""/>
                <input type="hidden" class="phase-remove formdata" name="phase[][remove]" value="0"/>
                <img class="phase-icon-image" src='{{ asset("frontend/img/design-icons/$index.jpg") }}' width="61"/>
            </td>
            <td><input type="text" class="form-control phase-title formdata" name="phase[][title]" value="{{ $dp['title'] }}"/></td>
            <td><textarea class="form-control phase-content formdata" name="phase[][content]">{{ $dp['content'] }}</textarea></td>
            <td><button type="button" class="btn btn-sm btn-warning btn-phase-delete"><i class="fa fa-times"></i></button></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>