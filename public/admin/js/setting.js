$("[name='my-checkbox']").on('change', function () {
    $.ajax({
        url: $(this).data('api'),
        type: 'post',
        data: {
            id: $(this).data('id'),
            table: $(this).data('table'),
            column: $(this).data('column'),
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            console.log(response);
            if (response.success) {
                'use strict';
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Chuyển trạng thái thành công",
                    showConfirmButton: false,
                    timer: 1500
                });

            }
        }
    });
});
$(document).ready(function () {
    var route_prefix = "/admin/laravel-filemanager";
    $('.upload_image').filemanager('image', {prefix: route_prefix});
});
$('.confirm-button-delete').click(function (event) {
    var form = $(this).closest("form");
    event.preventDefault();
    Swal.fire({
        title: "Thông báo",
        text: "Bạn có muốn xóa không",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#11325c",
        cancelButtonColor: "#d33",
        cancelButtonText: "Đóng",
        confirmButtonText: "Đồng ý",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
});

$('.province_id').change(function() {
    const province_id = this.value;
    if (province_id) {
        $.ajax({
            url: `/admin/get-districts/${province_id}`,
            success: function(response) {
                console.log(response)
                if (response.success) {
                    const data = response.data;
                    $('.district_id').html('');
                    $('.district_id').append('<option>--Chọn--</option>');
                    $('.commune_id').html('');
                    $('.commune_id').append('<option>--Chọn--</option>');
                    data.forEach((value, key) => {
                        $('.district_id').append('<option value=' + value['id'] + '>' + value['name'] + '</option>');
                    });
                    'use strict';
                    var notify = $.notify('Vui lòng chọn Quận/Huyện', 'success', {
                        type: 'theme',
                        allow_dismiss: true,
                        delay: 300000,
                        showProgressbar: true,
                        timer: 300000,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        }
                    });
                }
            },
            errors: function(error) {
                console.error(errors);
            }
        });
    }
})
