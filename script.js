        $(document).ready(function () {
            $("form").submit(function (event) {
                event.preventDefault();
                $(".sub_b").addClass("fa-spinner fa-spin");
                var name = $("#name").val();
                var email = $("#email").val();
                var submit = $("#submit").val();
                $(".result").load("action.php", {
                    name: name,
                    email: email,
                    submit: submit
                })
        $(".sub_b").removeClass("fa-spinner fa-spin");
                });
            
           /* //////////For the index Page////////
            $("form").submit(function (event) {
                event.preventDefault();
                $(".sub_b").addClass("fa-spinner fa-spin");
                var name = $("#name").val();
                var email = $("#email").val();
                var submit = $(".index_submit").val();
                $(".index_result").load("action.php", {
                    name: name,
                    email: email,
                    submit: submit
                })
        $(".sub_b").removeClass("fa-spinner fa-spin");
                });*/            
            });



//$(document).ready(function () {
    /*$("form").submit(function (event) {
        event.preventDefault();
        var that = (this),
            url = that.attr('action'),
            method = that.attr('method'),
            data = {};
        that.find('[name]').each(function (index, value) {
            var that = $(this),
                name = that.attr('name'),
                value = that.val();

            data[name] = value;
        });

        $.ajax({
            url: url,
            type: method,
            data: data,
            success: function (response) {
                $(".result").html(response);
            }
        })
        return false;

    });
    //});
$(document).ready(function () {
                $("form").submit(function (event) {
                event.preventDefault();
                $(".sub_b").addClass("fa-spinner fa-spin");
                var name = $("#name").val();
                var email = $("#email").val();
                var submit = $(".submit").val();
                $(".result").load("action.php", {
                    name: name,
                    email: email,
                    submit: submit_1
                })
        $(".sub_b").removeClass("fa-spinner fa-spin");
                });
            });*/