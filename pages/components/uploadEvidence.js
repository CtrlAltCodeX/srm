$(document).ready(function () {

    var params = {};
    // params[csrf] = token;

    $('#blog_image_galery').fineUploader({
        template: 'qq-template-gallery',
        request: {
            endpoint: '../components/upload_image_file'
            // params: params
        },
        deleteFile: {
            enabled: true,
            endpoint: '../components/delete_image_file',
        },
        thumbnails: {
            placeholders: {
                waitingPath: '../../plugins/fine-upload/placeholders/waiting-generic.png',
                notAvailablePath: '../../plugins/fine-upload/placeholders/not_available-generic.png'
            }
        },
        validation: {
            allowedExtensions: ["jpg", "jpeg", "png"],
            sizeLimit: 0,

        },
        showMessage: function (msg) {
            toastr['error'](msg);
        },
        callbacks: {
            onComplete: function (id, name, xhr) {
                if (xhr.success) {
                    var uuid = $('#blog_image_galery').fineUploader('getUuid', id);
                    $('#blog_image_galery_listed').append('<input type="hidden" class="listed_file_uuid" name="blog_image_uuid[' + id + ']" value="' + uuid + '" /><input type="hidden" class="listed_file_name" name="blog_image_name[' + id + ']" value="' + xhr.uploadName + '" />');
                } else {
                    toastr['error'](xhr.error);
                }
            },
            onDeleteComplete: function (id, xhr, isError) {
                if (isError == false) {
                    $('#blog_image_galery_listed').find('.listed_file_uuid[name="blog_image_uuid[' + id + ']"]').remove();
                    $('#blog_image_galery_listed').find('.listed_file_name[name="blog_image_name[' + id + ']"]').remove();
                }
            }
        }
    }); /*end image galery*/
});