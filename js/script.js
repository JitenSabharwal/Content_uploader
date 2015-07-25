var ruleCount=2;
var roundCount=2;
var contactCount=2;
var i=0;
   
$(document).ready(function(){

            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
            
            $(".link").bind('click',function(){
                var loc=$(this).attr('data-target');
                $(".contentWrapper").load(loc);
            });
            
            //var id=$('#eTypeLabel').parent().children('.input').attr('id');
            //$("#eTypeLabel").attr('for',$(this).parent().children('.input').attr('id'));

            $("select").change(function(e){
                $(this).children("option:selected").each(function(){
                    var data=$(this).attr("value");
                    switch(data){
                        case 'intro': $(".content").slideUp(300); $(".intro").delay(305).slideDown(); break;
                        case 'rounds': $(".content").slideUp(300); $(".rounds").delay(305).slideDown(); break;
                        case 'rules': $(".content").slideUp(300); $(".rules").delay(305).slideDown(); break;
                        case 'contact': $(".content").slideUp(300); $(".contact").delay(305).slideDown(); break;
                    }
                });
            }).change();


            //Add Rules
            $(".addrules").bind('click',function(){
                var data='<textarea class="materialize-textarea rulesName" name="rule[]" placeholder="Enter Rule" style="opacity: 0;">'.replace('1',ruleCount);
                ruleCount+=1;
                $(data).appendTo($('.rulewrap')).animate({'opacity':1},500)
            });

            //Add Rounds
            $(".addround").bind('click',function(){
                var data='<div class="card" style="opacity: 0;"><input type="text" name="r[]" placeholder="Round Name" class="roundName"><textarea class="materialize-textarea roundDetails" name="rt[]" placeholder="Round Details"></textarea></div>'.replace('2',roundCount);
                roundCount+=1;
                $(data).appendTo($('.roundWrap')).animate({'opacity':1},500)
            });

            //Add Contacts
            $(".addcontact").bind('click',function(){
                var data='<div class="card" style="opacity: 0;"><input type="text" name="c[]" placeholder="Co-ordinator Name" class="cName"><input type="text" name="cp[]" placeholder="Contact Number" class="cContact"></div>'.replace('2',contactCount);
                contactCount+=1;
                $(data).appendTo($('.contactWrap')).animate({'opacity':1},500)
            });

            $(".nextStep").bind('click',function(){

                            var heading=$(".heading").val();
                            var intro=$(".introText").val();
                            var rule={};
                            var r={};
                            var rd={};
                            var c={};
                            var cp={};
                            var cod="";
                            var coc="";
                            var round="";
                            var roundde="";
                            var ruless="";

                            $('.rulesName').each(function(i) {
                                rule[i] = $(this).val();
                            });

                            i=0;

                            $(".roundName").each(function(i){
                                r[i]=$(this).val();
                            });

                            i=0;

                            $(".roundDetails").each(function(i){
                                rd[i]=$(this).val();
                            });

                            i=0;

                            $(".cName").each(function(i){
                                c[i]=$(this).val();
                            });

                            i=0;

                            $(".cContact").each(function(i){
                                cp[i]=$(this).val();
                            });
                            i=0;
                            var x;
                            for (x in c) {
                                cod =" " + cod +c[x] + " , ";
                            }
                            //cod=cod+"]";
                            for (x in cp) {
                                coc =" "+ coc+ cp[x] + " ,";
                            }
                            //coc =coc+"]";
                            for (x in r) {
                                round = " "+  round+r[x] + " , ";
                            }
                            //round =round+"]";
                            for (x in rd) {
                                roundde =" "+  roundde+rd[x] + " ,";
                            }
                            //roundde =roundde+ "]";
                            for (x in rule ) {
                                ruless =" "+  ruless+rule[x] + " ,";
                            }
                            var obj = '{"'+heading+'":[{'
                                   +'"intro": "'+intro +'",'
                                   +'"rules": ["'+ruless+'"],'
                                   +'"rounds": ["'+round+'"],'+'"round_Details" :["'+roundde+'"],'+'"Co_ordinator" :["'+cod+'"],'+'"Co_ordinator_number" : ["'+coc+'"]'
                                   +'}]'+'}';
                                   console.log(obj);
                            if(obj.length>0){
                            $.ajax ({
                                   type: "POST",
                               url:"./functions/upload.php",
                               data:{id: obj , head: heading},
                               success: function() {
                                  alert("Content Uploaded Successfully");
                                  $(".contentWrapper").load("./functions/view.php");
                                  return false; 
                                  
                               }
                            });
                            }

                });
            $('select').material_select();
            $(".button-collapse").sideNav();  
});

