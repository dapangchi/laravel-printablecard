<table style="display:none;">
<tr id="row-template" class="new">
    <td class="text-center">
        <div class="place-holder" data-src=""><span>Roll Over for preview</span></div>
        <img src="{{ asset('admins/img/spacer.gif') }}" class="thumbnail" width="100" style="display:none;"/>
    </td>
    <td><input type="text" class="img-label form-control"/></td>
    <td class="text-center"><input type="text" class="img-sort form-control"/></td>
    <td class="text-center"><input type="radio" class="img-main form-control" name="main"/></td>
    <td class="text-center">
        <input type="checkbox" class="img-remove form-control" style="display:none;"/>
        <input type="button" class="btn btn-danger btn-remove" value="Remove"/>
    </td>
</tr>
</table>

<table style="display:none;">
<tr id="row-template-discount" class="new">
    <td class="text-center"><div class="form-group"><input type="text" class="discount-set form-control" name="discount-set[]"/></div></td>
    <td class="text-center"><div class="form-group"><input type="text" class="discount-percent form-control" name="discount-percent[]"/></div></td>
    <td class="text-center">
        <input type="checkbox" class="discount-remove form-control" style="display:none;"/>
        <input type="button" class="btn btn-danger btn-discount-remove" value="Remove"/>
    </td>
</tr>
</table>

<div style="display:none;">
    <div id="feature-template-box" class="feature-template-box new" style="background:#efefef;">
        
        <div class="form-group has-error" style="margin:10px;">
            <span class="help-block message-box"></span>
        </div>
        
        <table class="table table-border">
        <colgroup>
            <col width="250"/>
            <col width="115"/>
            <col width="200"/>
            <col width="110"/>
            <col width="125"/>
            <col width="100"/>
            <col width="100"/>
            <col width=""/>
        </colgroup>
        <thead>
            <tr>
                <th>Feature Name</th>
                <th>Feature Type</th>
                <th>Feature Link</th>
                <th>Sort Order</th>
                <th>Print Feature</th>
                <th>Both Side</th>
                <th>Required</th>
                <th class="text-right"><button type="button" class="btn btn-danger btn-remove-feature" title="Remove Feature"><i class="fa fa-times"></i></button></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" class="form-control feature-name" value=""/></td>
                <td class="text-middle feature-type-text"></td>
                <td><input type="text" class="form-control feature-link" value=""/></td>
                <td><input type="text" class="form-control feature-sort" value="0"/></td>
                <td>
                    <select class="form-control feature-print">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </td>
                <td>
                    <input type="hidden" class="form-control feature-side-hidden"/>
                    
                    <select class="form-control feature-side-select" style="display:none;">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </td>
                <td>
                    <select class="form-control feature-required">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </td>
                <td>
                    <input type="checkbox" class="feature-remove form-control" style="display:none;"/> 
                    <input type="hidden" class="feature-type form-control" style="display:none;"/> 
                </td>
            </tr>
        </tbody>
        </table>
        
        <table class="table table-border table-options">
        <colgroup>
            <col width="250"/>
            <col width="200"/>
            <col width="200"/>
            <col width="120"/>
            <col width=""/>
        </colgroup>  
        <thead>
            <tr>
                <th>Option Name</th>
                <th>Option Price</th>
                <th>Sort Order</th>
                <th>Price Type</th>
                <th></th>
            </tr>
        </thead>
        <tbody></tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-default btn-add-option">Add Option</button></td>
                <td></td>
            </tr>
        </tfoot>
        </table>
    </div>
</div>

<table style="display:none;">
<tr id="row-template-option" class="new">
    <td class="text-center"><div class="form-group"><input type="text" class="option-name form-control" name="option-name[]"/></div></td>
    <td class="text-center"><div class="form-group"><input type="text" class="option-price form-control" name="option-price[]" value="0"/></div></td>
    <td class="text-center"><div class="form-group"><input type="text" class="option-sort form-control" name="option-sort[]" value="0"/></div></td>
    <td class="text-center">
        <div class="form-group">
            <select class="form-control option-price-type" name="option-price-type[]">
                <option value="0">Fixed</option>
                <option value="1">Percent</option>
            </select>
        </div>
    </td>
    <td>
        <input type="checkbox" class="option-remove form-control" style="display:none;"/>
        <button type="button" class="btn btn-danger btn-remove-option" title="Remove Option"><i class="fa fa-times"></i></button>
    </td>
</tr>
</table>