<HTML> 
<BODY>
<FORM METHOD="POST" ACTION="/action.php">
First name: <input type="text" name="firstname" ><br>
Last name: <input type="text" name="lastname" >

<input type="radio" name="gender" value="male" /> Male<br> 
<input type="radio" name="gender" value="female"/>Female<br>

<input type="submit" value="Submit"/>

<select>  
<option >Volvo</option> 
<option>Saab</option> 
 <option>Fiat</option>
<option>Audi</option>
</select>
Where do you live?
<select name="town" id="tn">
   <option value="swindon">Swindon</option>
   <option value="london” 
        selected="selected">London</option>
   <option value=“bristol">Bristol</option>
</select>

<textarea>The cat was playing in the garden.</textarea>
<br>
<input type="checkbox“ 
		checked="checked“ /> Red
<br>
<input type="checkbox“ name="colour[]"
 		/> Blue
<BR>
<input type="hidden" name="hidden_value"
		value="My Hidden Value" />
<input type="button" name="cancel"
		value="cancel" />

</FORM> 
</BODY>
 </HTML>
