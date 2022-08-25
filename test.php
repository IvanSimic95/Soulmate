<?php
$signature = hash_hmac('sha256', strval("psychicAdmin"), 'sk_live_Ncow50B9RdRQFeXBsW45c5LFRVYLCm98');

?>

<div id="talkjs-container-psychicAdmin" style="width: 90%; margin: 30px; height: 500px; position:fixed;bottom:0;right:0;z-index:999;">
     <i>Loading chat...</i>
 </div>

<script>
    (function(t,a,l,k,j,s){
    s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
    ;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
    .push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
</script>


<script>  
    Talk.ready.then(function() {
      var other = new Talk.User({
          id: "psychicAdmin",
          name: "Psychic Art",
          email: "contact@psychic-art.com",
          photoUrl: "https://psychic-art.com/assets/img/avatars/admin.png",
          role: "administrator",
    
      });
      var me = new Talk.User("soulmateAdmin");
      window.talkSession = new Talk.Session({
          appId: "ArJWsup2",
          me: other,
          signature: "<?php echo $signature; ?>"
      });
      var conversation = talkSession.getOrCreateConversation("psychicAdmin");
          conversation.setAttributes({
          subject: "Psychic Art Admin Test",
          custom: { 
          status: "Paid"
          }
      });

      conversation.setParticipant(other);
      conversation.setParticipant(me);

        var chatbox = window.talkSession.createChatbox(conversation);
        chatbox.mount(document.getElementById("talkjs-container-psychicAdmin"));
    })

</script>