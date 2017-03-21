<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
		 <tr>
            <td><label for="fullName">Full Name</label></td>
            <td><input type="text" name="fullName" size="32" /></td>
        </tr>
		 <tr>
            <td><label for="nickName">Nickname</label></td>
            <td><input type="text" name="nickName" size="8" /></td>
        </tr>
		 <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" name="email" size="32" /></td>
        </tr>
		 <tr>
            <td><label for="address">Home Address</label></td>
            <td><input type="text" name="address" size="36" /></td>
        </tr>
		<tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="radio" name="gender" value="Female" required>Female
				<input type="radio" name="gender" value="Male" required>Male 
			</td>
        </tr>
		 <tr>
            <td><label for="cellphoneNumber">Cellphone Number</label></td>
            <td><input type="number" name="cellphoneNumber" size="11"/></td>
        </tr>
		 <tr>
            <td><label for="comments">Comments</label></td>
            <td><textarea name="comments" rows="10" cols="40" size="300"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
    </table>    
</form>