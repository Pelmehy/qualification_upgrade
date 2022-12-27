$(document).ready(function () {
    $('#professor-7').on('mousedown', function (e) {
        $(this).draggable({
            helper: "clone"
        }).css({
            width: 300,
            opacity: '.7'
        });

    });

    $('.draggable').each(function () {
            $(this).draggable({
                helper: "clone",
                height: 100
            }).css({
                width: 300,
                // opacity: '.7'
            });

    })
    function drag(id)
    {
        $('#'+id).on('mousedown', function (e) {
            $(this).draggable({
                helper: "clone",
                height: 100
            }).css({
                width: 300,
                opacity: '.7'
            });

        });
    }

    $('#add-button').click(function () {
        console.log('drops_update')
        drops_update();
    })
    function drops_update()
    {
        $('.droppable').each(function () {
            $(this).droppable({
                drop: function(event, ui) {
                    console.log($('input', this));
                    console.log(ui.draggable.attr('name'));

                    let info_array = ui.draggable.attr('name').split(',');

                    $('#professorName', this).val(info_array[0]);
                    $('#professorId', this).val(info_array[1])
                }
            })
        })
    }
})
