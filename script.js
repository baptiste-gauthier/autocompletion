
// permet d'ajouter en bdd toutes les infos du json 

//-----------------------$(document).on("click" , "#get_json" , () => {
//-----------------------
//-----------------------    
//-----------------------    $.ajax({
//-----------------------        type: "GET",
//-----------------------        url: "botw.json",
//-----------------------        dataType: "json",
//-----------------------        success: function (data) {
//-----------------------            console.log(data) ; 
//-----------------------            for(var i = 0 ; i <= 80 ; i++)
//-----------------------            {
//-----------------------                
//-----------------------                var name = data.data.monsters[i].name ; 
//-----------------------                var description = data.data.monsters[i].description ; 
//-----------------------                var image = data.data.monsters[i].image;
//-----------------------                if(data.data.monsters[i].common_locations == null)
//-----------------------                {
//-----------------------                    var common_locations = "" ; 
//-----------------------                }
//-----------------------                else{
//-----------------------                    var common_locations = data.data.monsters[i].common_locations[0];
//-----------------------                }
//-----------------------
//-----------------------                $.ajax({
//-----------------------                    type: "POST",
//-----------------------                    url: "add_infos_bdd.php",
//-----------------------                    data: {name: name, description: description, image: image, common_locations: common_locations},
//-----------------------                    dataType: "text",
//-----------------------                    success: function (response) {
//-----------------------                        $('body').append(response); 
//-----------------------                    }
//-----------------------                });
//-----------------------
//-----------------------                
//-----------------------            }
//-----------------------        }
//-----------------------    });
//-----------------------})

