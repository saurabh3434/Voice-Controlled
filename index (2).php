<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script>
if (annyang) {
  var commands = {
    'new command *name': function(name) { alert(name); },
    'Sign out': function() {  window.location="New_page.php" },
    'Sign in': function() { alert("Sign in"); },
    'turn on 1': function() { alert("turn on 1"); },
    'turn on 2': function() { alert("turn on 2"); },
    'Ip *ip': function(ip) { alert(ip); }
	
  }
  annyang.addCommands(commands);
  annyang.start();
}
</script>