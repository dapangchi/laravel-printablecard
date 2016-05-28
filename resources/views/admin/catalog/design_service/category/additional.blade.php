<div>
    <table style="display:none;">
        <tr id="row-template" class="new">
            <td class="text-center">
                <div class="place-holder" data-src=""><span>Roll Over for preview</span></div>
                <img src="{{ asset('admins/img/spacer.gif') }}" class="thumbnail" width="100" style="display:none;"/>
            </td>
            <td><input type="text" class="img-label form-control"/></td>
            <td class="text-center"><input type="text" class="img-link form-control"/></td>
            <td class="text-center"><input type="text" class="img-sort form-control"/></td>
                <td class="text-center">
                <input type="checkbox" class="img-remove form-control" style="display:none;"/>
                <input type="button" class="btn btn-danger btn-img-remove" value="Remove"/>
            </td>
        </tr>
    </table>
    
    <table style="display:none;">
        <tr id="phase-row-template" class="new">
            <td>
                <input type="hidden" class="phase-icon-type" name="phase[][icon-type]" value=""/>
                <input type="hidden" class="phase-icon-path" name="phase[][icon-path]" value=""/>
                <img class="phase-icon-image" src='{{ asset("frontend/img/design-icons/6.jpg") }}' width="61"/>
            </td>
            <td><input type="text" class="form-control phase-title" name="phase[][title]" value=""/></td>
            <td><textarea class="form-control phase-content" name="phase[][content]"></textarea></td>
            <td><button type="button" class="btn btn-sm btn-warning btn-phase-delete"><i class="fa fa-times"></i></button></td>
        </tr>
    </table>
    
    <div class="modal fade" id="phase-icon-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li>
                        </ul>
                        <h3 class="block-title">Select Icon</h3>
                    </div>
                    <div class="block-content" style="max-height:500px; overflow-y:auto;"><div class="form-horizontal">
                        <table class="table table-bordered">
                        <colgroup>
                            <col width="100">
                            <col width="">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th class="text-middle">Original</th>
                                <td class="text-middle">
                                    <?php for($i=1; $i<6; $i++) { ?>   
                                        <label for="phase-icon-type-{{ $i }}" class="radio-inline">
                                            <input type="radio" id="phase-icon-type-{{ $i }}" value="{{ $i }}" class="phase-icon-type" name="phase-icon-type" @if($i==1) checked="checked" @endif data-src="frontend/img/design-icons/{{ $i }}.jpg"> 
                                            <img src="{{ asset("frontend/img/design-icons/$i.jpg") }}" width="50"/>
                                        </label>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-middle">Custom</th>
                                <td class="text-middle">
                                    <label for="phase-icon-type-6" class="radio-inline">
                                        <input type="radio" id="phase-icon-type-6" value="6" class="phase-icon-type" name="phase-icon-type" data-src="frontend/img/design-icons/6.jpg"> 
                                        <img id="uload-icon-image" src="{{ asset("frontend/img/design-icons/6.jpg") }}" width="50"/>
                                    </label>
                                    <br/><br/>
                                    <input type="file" name="upload-icon" id="upload-icon" style="display:none;"/>
                                </td>
                            </tr>
                        </tbody>
                        </table>    
                    </div></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primart" type="button" data-dismiss="modal" id="btn-select-icon">Select</button>
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>