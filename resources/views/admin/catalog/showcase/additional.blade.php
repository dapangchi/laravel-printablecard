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

<div class="modal fade" id="product-list-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li>
                    </ul>
                    <h3 class="block-title">Products</h3>
                </div>
                <div class="block-content" style="max-height:500px; overflow-y:auto;">
                    <table class="table table-bordered table-striped table-hover" id="card-table">
                    <colgroup>
                        <col width="50"/>
                        <col width=""/>
                        <col width="250"/>
                        <col width="100"/>
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="text-right">No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>       
                        <?php $i = 0; ?>
                        <?php foreach($cards as $r) { $i++; ?>
                        <tr>
                            <td class="text-right">{{ $i }}</td>
                            <td>{{ $r->name }}</td>
                            <td>{{ $r->category->name }}</td>
                            <td class="text-center"><button type="submit" class="btn btn-primary btn-sm btn-select-product" name="card_id" value="{{ $r->id }}">Select</button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>