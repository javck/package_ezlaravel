<a class="btn btn-success btn-add-new" id="bulk_create_order_btn"><i class="voyager-plus"></i> <span>{{ __('generic.bulk-create-order') }}</span></a>

{{-- Bulk delete modal --}}
<div class="modal modal-danger fade" tabindex="-1" id="bulk_create_order_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <i class="voyager-plus"></i> {{ __('generic.bulk-create-order') }} ?
                </h4>
            </div>
            <div class="modal-body" id="bulk_create_order_modal_body">
            </div>
            <div class="modal-footer">
                <form action="{{ route('voyager.orders.store') }}" id="bulk_create_order_form" method="POST">
                    {{ method_field("POST") }}
                    {{ csrf_field() }}
                    <input type="hidden" name="ids" id="bulk_create_order_input" value="">
                    <input type="submit" class="btn btn-danger pull-right create-confirm"
                             value="{{ __('voyager::generic.bulk_create_confirm') }}">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                    {{ __('voyager::generic.cancel') }}
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script>
$(document).ready(function(){
    // Bulk delete selectors
    var $bulkCreateOrderBtn = $('#bulk_create_order_btn');
    var $bulkCreateOrderModal = $('#bulk_create_order_modal');
    var $bulkCreateOrderCount = $('#bulk_create_order_count');
    var $bulkCreateOrderDisplayName = $('#bulk_create_order_display_name');
    var $bulkCreateOrderInput = $('#bulk_create_order_input');
    // Reposition modal to prevent z-index issues
    $bulkCreateOrderModal.appendTo('body');
    // Bulk delete listener
    $bulkCreateOrderBtn.click(function () {
        console.log('btn click');
        var ids = [];
        var $checkedBoxes = $('#dataTable input[type=checkbox]:checked').not('.select_all');
        var count = $checkedBoxes.length;
        if (count) {
            // Reset input value
            $bulkCreateOrderInput.val('');
            // Deletion info
            var displayName = count > 1 ? '{{ $dataType->display_name_plural }}' : '{{ $dataType->display_name_singular }}';
            displayName = displayName.toLowerCase();
            $bulkCreateOrderCount.html(count);
            $bulkCreateOrderDisplayName.html(displayName);
            // Gather IDs
            $.each($checkedBoxes, function () {
                var value = $(this).val();
                ids.push(value);
            })
            // Set input value
            $bulkCreateOrderInput.val(ids);
            // Show modal
            $bulkCreateOrderModal.modal('show');
        } else {
            // No row selected
            toastr.warning('{{ __('generic.bulk_create_order_nothing') }}');
        }
    });
});
</script>
