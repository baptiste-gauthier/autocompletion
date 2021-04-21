
//permet d'ajouter en bdd toutes les infos du json 

//--------------------------------------
//--------------------------------------$(document).on("click" , "#get_json" , () => {
//--------------------------------------
//--------------------------------------    
//--------------------------------------    $.ajax({
//--------------------------------------        type: "GET",
//--------------------------------------        url: "botw.json",
//--------------------------------------        dataType: "json",
//--------------------------------------        success: function (data) {
//--------------------------------------            console.log(data) ; 
//--------------------------------------            for(var i = 0 ; i <= 80 ; i++)
//--------------------------------------            {
//--------------------------------------                
//--------------------------------------                var name = data.data.monsters[i].name ; 
//--------------------------------------                var description = data.data.monsters[i].description ; 
//--------------------------------------                var image = data.data.monsters[i].image;
//--------------------------------------                if(data.data.monsters[i].common_locations == null)
//--------------------------------------                {
//--------------------------------------                    var common_locations = "Undefined" ; 
//--------------------------------------                }
//--------------------------------------                else{
//--------------------------------------                    var common_locations = data.data.monsters[i].common_locations[0];
//--------------------------------------                }
//--------------------------------------
//--------------------------------------                $.ajax({
//--------------------------------------                    type: "POST",
//--------------------------------------                    url: "add_infos_bdd.php",
//--------------------------------------                    data: {name: name, description: description, image: image, common_locations: common_locations},
//--------------------------------------                    dataType: "text",
//--------------------------------------                    success: function (response) {
//--------------------------------------                        $('body').append(response); 
//--------------------------------------                    }
//--------------------------------------                });
//--------------------------------------
//--------------------------------------                
//--------------------------------------            }
//--------------------------------------        }
//--------------------------------------    });
//--------------------------------------})

// suggestion des resultats 

$(document).ready(function () {
    $("#search_bar").keyup(function (e) { 

        setTimeout( () => {
            $("#result").attr("style","display: block;" );
        },500) ;

        $("#list_result").html(''); 

        var search = $('#search_bar').val();

        console.log($('#search_bar').html()) ;
        
        if(search != "")
        {
            $.ajax({
                type: "GET",
                url: "list_result.php",
                data: "search=" + search,
                dataType: "text",
                success: function (response) {
                    if(response == "")
                    {
                        $('#list_result').append('<p> Aucun resultat n\'a été trouver </p> ') ;
                    }
                    else{
                        $('#list_result').append(response) ;   
                        $('#list_result').html().replaceAll(response); 
                    }
                }
            });
        }
    });

});

$(document).ready( () => {
    $(document).on("click" , "#search_icon" , () => {

        var search = $('#search_bar').val();

        $.ajax({
            type: "GET",
            url: "search_result.php",
            data: "search=" + search,
            dataType: "text",
            success: function (response) {
                $('#search_result').append(response); 
            }
        }); 
    })
    

})