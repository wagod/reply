<html>
<title>learners</title>
<head>
<script>
class home
{
	constructor(){
		this.username="";
		this.question="";
	   document.get_called_class=this.constructor.onCall();
	}

	static onCall() 
	{
		return "hello";
	}
}
function post()
{
         user.username =document.getElementById("user").value;
		user.question =document.getElementById("text").value;
		user.k =(("<b>USERNAME: </b>")+ user.username +("<br><br>") + ("<b>QUESTION</b>")+("<br>")+ user.question);
		document.getElementById("display").innerHTML=user.k;
	
}

let user=new home();

	</script>
	</head>
<body>

<p>
<label><i><b>please enter your username:</b></i></label>
<input type="text" id="user" value=""><br><br>
<textarea name="post"cols="90" rows="15" id="text" value="me" placeholder="Please type your question here">
</textarea><br><br>
<button onclick="post()">submit</button>
</p>
<p id="display">
</p>

</body>
</html>
	
