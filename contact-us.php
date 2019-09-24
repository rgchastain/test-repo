<section class="contact">
    <article class="contact-form">
        <!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
<div id='crmWebToEntityForm' style='width:300px;margin:auto;'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads955207000000476001 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory955207000000476001()' accept-charset='UTF-8'>
 <input type='text' style='display:none;' name='xnQsjsdp' value='bd96cd5b04ce791e0e58971c4d2ae762a5ce1894f5c9d173c80e5450aede9fce'></input> 
 <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
 <input type='text' style='display:none;' name='xmIwtLD' value='d6ad432f00651e7133f1fe4afc2deffac50561320f41f78b1274e4198fd3e3ac'></input> 
 <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
 <input type='text' style='display:none;' name='returnURL' value='https://wicpack.com/' > </input><br></br>
     <!-- Do not remove this code. -->
    <style>
        tr , td { 
            padding:15px;
            border-spacing:0px;
            border-width:0px;
            }

    </style>
    <table style='width:300px;background-color:transparent;color:#557636'>
        <tr>
            <td colspan='2' align='left' style='color:black;font-family:Arial;font-size:50px;'><strong>Contact Us</strong>
            </td>
        </tr>
        <br></br>
        <tr>
            <td>
                <strong style='nowrap:nowrap;font-size:22px;font-family:Arial;width:200px;line-height:22px;'>NAME *</strong>
                <br>
                <input type='text' maxlength='80' style='width:350px;border: none; border-bottom: 1px solid lightgray; outline: none;background-color: transparent;' name='Last Name'>
                </input>
            </td>
        </tr>
        <tr>
            <td>
                <strong style='nowrap:nowrap;font-size:22px;font-family:Arial;width:200px;line-height: 22px;'>EMAIL *</strong>
                <br>
                <input type='text' maxlength='100' style='width:350px; border: none; border-bottom: 1px solid lightgray; outline: none;background-color: transparent;' name='Email'>
                    
                </input>
            </td>
        </tr>
        <tr>
            <td>
                <strong style='nowrap:nowrap;font-size:22px;font-family:Arial;width:200px;line-height: 22px;'>WIC BRANCH *</strong>
                <br>
                <select  style='width:350px;border: none; border-bottom: 1px solid lightgray; outline: none;' name='LEADCF2'>
                    <option value='-None-'>-None-</option>
                    <option value='Austin'>Austin</option>
                    <option value='Dallas'>Dallas</option>
                    <option value='Oklahoma&#x20;City'>Oklahoma City</option>
                    <option value='Reynosa'>Reynosa</option>
                    <option value='Wichita'>Wichita</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <strong style='nowrap:nowrap;font-size:22px;font-family:Arial;width:200px;line-height: 22px;'>HOW CAN WE HELP *</strong>
                <br>
                <textarea maxlength='32000' style='width:350px;border: 1px solid lightgray;outline: none;background-color: transparent;' name='Description'style='width:350px;'>&nbsp;</textarea>
            </td>
        </tr>

        <tr>
            <td colspan='2'align='center' style='text-align:left; padding-top:15px;font-size:12px;'>
                <input style='font-size:22px;font-weight:bold;color:black; border: 1.5px outset black; background-color: #557636;' id='formsubmit' type='submit' value='SUBMIT' ></input>
                <input type='reset' name='reset' style='font-size:22px;font-weight:bold; color:black; border: 1.5px outset black; background-color: #557636;' value='RESET' ></input>
            </td>
        </tr>
    </table>
    



        <script>
          var mndFileds=new Array('Last Name','Email','LEADCF2','Description');
          var fldLangVal=new Array('Name','Email','WIC Branch','How can we help'); 
            var name='';
            var email='';

          function checkMandatory955207000000476001() {
            for(i=0;i<mndFileds.length;i++) {
              var fieldObj=document.forms['WebToLeads955207000000476001'][mndFileds[i]];
              if(fieldObj) {
                if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                 if(fieldObj.type =='file')
                    { 
                     alert('Please select a file to upload.'); 
                     fieldObj.focus(); 
                     return false;
                    } 
                alert(fldLangVal[i] +' cannot be empty.'); 
                  fieldObj.focus();
                  return false;
                }  else if(fieldObj.nodeName=='SELECT') {
                 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                    alert(fldLangVal[i] +' cannot be none.'); 
                    fieldObj.focus();
                    return false;
                   }
                } else if(fieldObj.type =='checkbox'){
                 if(fieldObj.checked == false){
                    alert('Please accept  '+fldLangVal[i]);
                    fieldObj.focus();
                    return false;
                   } 
                 } 
                 try {
                     if(fieldObj.name == 'Last Name') {
                    name = fieldObj.value;
                    }
                } catch (e) {}
              }
            }
            document.getElementById('formsubmit').disabled=true;
          }
    </script>
    </form>
</div>

    </article>

    <article class="contact-information">
        <?= $components->render('contact-us-contact-us-left') ?>
        <?= $components->render('contact-us-contact-us-right') ?>
    </article>
</section>