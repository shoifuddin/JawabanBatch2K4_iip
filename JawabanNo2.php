<?php

function is_username_valid($user)
{
	$uppercase = preg_match('@[A-Z]@', $user);
	$lowercase = preg_match('@[a-z]@', $user);
	$number    = preg_match('@[0-9]@', $user);
	$spesial   = preg_match("#[\\~\\`\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\.\\?\\/\\\\\\\\]+#", $user);

	if(!$uppercase || !$lowercase || !$number || strlen($user)<5 || strlen($user)>9 || substr($user, 0,1)==$number || substr($user, 0,1) === $spesial)
	{
	    return 0; //bisa diganti dengan "false"

	}else{

	    return 1; //bisa diganti dengan "true"
	    
	}
	/*
			--> !$uppercase = Jika Username tidak mengandung huruf besar maka bernilai false
			--> !$lowercase = Jika Username tidak mengandung huruf kecil maka bernilai false
			--> !$number = Jika Username tidak mengandung angka maka bernilai false
			-->	 strlen($pass)<5 || strlen($pass)>9 = Jika Username tidak Kurang dari 5 dan lebih dari		9 maka bernilai false
			-->	 substr($pass, 0,1)==$number = Jika username huruf pertamanya diawali dengan angka 		  maka bernilai false


	*/
}

function is_password_valid($pass)
{
	$karakter = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m';
	$char_all=preg_match_all($karakter, $pass);
	$must_at=preg_match("/=/", $pass);

	if(!$must_at || !$char_all)
	{	
		return 0;

	}

	else
	{
		return 1;

	}
	/*	
	--> /@/ harus ada karakter @ didalam password
	--> (?=.*\d) minimal 1 digit
	--> (?=.*[a-z]) ada huruf kecil
	--> (?=.*[A-Z]) ada huruf besar(kapital)
	--> (?!.* ) tanpa spasi
	--> (?=.*[^a-zA-Z0-9]) ada karakter karakter selain a-zA-Z0-9
	--> .{8,16} Karakter minimal 8 dan maksimal 16
	*/

}


echo is_username_valid("Xrutaf888");
echo is_username_valid("1Diana");
echo is_password_valid("passW0rd=");
echo is_password_valid("C0d3YourFuture!#");


?>
