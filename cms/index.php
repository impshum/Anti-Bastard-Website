<?php
include '../assets/php/controls.php';
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>*</title>
  <meta name="theme-color" content="#000">
  <meta name="robots" content="noindex, follow">

  <link rel="stylesheet" href="../assets/css/bulma.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/ani.css">

</head>

<body>

<?php
if (!isset($_SESSION['logged_in'])) {
    echo '
    <nav class="navbar is-fixed-top is-black" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="../">
          <h1 class="is-size-3 title has-text-white fadeIn delay-0">#!</h1>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navvi">
          <span class="has-text-white" aria-hidden="true"></span>
          <span class="has-text-white" aria-hidden="true"></span>
          <span class="has-text-white" aria-hidden="true"></span>
        </a>
      </div>

      <div class="navbar-menu">
        <div class="navbar-end has-text-centered">
          <a href="../" class="navbar-item is-size-4">Home</a>
        </div>
      </div>
    </nav>

  <section class="section">
    <div class="container">
      <div class="columns is-multiline is-centered">
        <div class="column is-6">
          <br><br><br><br><br>
          <h3 class="has-text-white is-size-3 has-text-centered doont ani fadeIn">Login</h3>
            <form id="login">
            <div class="field is-grouped ani fadeInUp">
              <div class="control is-expanded">
                <input class="input fuck" name="fuckyou" type="password">
              </div>
              <div class="control ">
                <input class="button" type="submit" value="GO!">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  '; ?>

<script src="../assets/js/jquery.min.js"></script>
<script>
function stringGen(len) {
  var text = "";
  var charset = "abcdefghijklmnopqrstuvwxyz0123456789";
  for (var i = 0; i < len; i++)
    text += charset.charAt(Math.floor(Math.random() * charset.length));
  return text;
}

function notify(msg, mode) {
  var classy = stringGen(9);
  $('body').append(`<div id='${classy}' class='alert notification is-${mode} ani2 slideInRight'>${msg}</div>`)
  setTimeout(function() {
    $(`#${classy}`).removeClass('slideInRight');
    $(`#${classy}`).addClass('slideOutRight');
    setTimeout(function() {
      $(`#${classy}`).remove();
    }, 3000);
  }, 3000);
}

  $("#login").bind("submit", function(e) {
    e.preventDefault();
    var fuckyou = $(".fuck").val();
    $.ajax({
      type: "POST",
      url: 'login.php',
      data: {
        'fuckyou': fuckyou
      },
      success: function(data) {
        if (data.trim() == 'wanker') {
          location.reload();
        } else {
          $('.fuck').val('');
          notify('Moron!', 'white');
        }
      },
      error: function(error) {
        console.log(error);
      }
    });

  });
</script>
<?php
} elseif (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'wanker') {
        ?>

  <nav class="navbar is-fixed-top is-black" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="./">
        <h1 class="is-size-3 title has-text-white fadeIn delay-0">#!</h1>
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navvi">
        <span class="has-text-white" aria-hidden="true"></span>
        <span class="has-text-white" aria-hidden="true"></span>
        <span class="has-text-white" aria-hidden="true"></span>
      </a>
    </div>

    <div class="navbar-menu">
      <div class="navbar-end has-text-centered">
        <a id="save" class="navbar-item is-size-4">Save</a>
        <a href="../" class="navbar-item is-size-4">View</a>
        <a id="settings_btn" class="navbar-item is-size-4">Settings</a>
        <a href="logout.php" class="navbar-item is-size-4">Logout</a>
      </div>
    </div>
  </nav>


  <section class="section">
    <div class="container">
      <div class="columns is-multiline is-centered">
        <div class="column is-6">
          <br>
          <h3 class="has-text-white is-size-3 has-text-centered doont ani fadeIn">Gigs</h3>
          <div id='gigs'>
            <div class="field is-grouped ani fadeInDown">
              <div class="control is-expanded">
                <input class="input gig_date" type="text" placeholder="date">
              </div>
              <div class="control is-expanded">
                <input class="input gig_location" type="text" placeholder="location">
              </div>
            </div>
          </div>
        </div>
        <div class="column is-6 settings">
          <br>
          <h3 class="has-text-white is-size-3 has-text-centered">Settings</h3>
          <br>

          <div class="field">
            <label class="label has-text-white">Title</label>
            <div class="control">
              <input id="title" class="input" type="text">
            </div>
          </div>

          <div class="field">
            <label class="label has-text-white">Description</label>
            <div class="control">
              <input id="description" class="input" type="text">
            </div>
          </div>

          <div class="field">
            <label class="label has-text-white">Facebook</label>
            <div class="control">
              <input id="facebook" class="input" type="text">
            </div>
          </div>

          <div class="field">
            <label class="label has-text-white">Instagram</label>
            <div class="control">
              <input id="instagram" class="input" type="text">
            </div>
          </div>

          <div class="field">
            <label class="label has-text-white">Twitter</label>
            <div class="control">
              <input id="twitter" class="input" type="text">
            </div>
          </div>

          <div class="field">
            <label class="label has-text-white">Bandcamp</label>
            <div class="control">
              <input id="bandcamp" class="input" type="text">
            </div>
          </div>

          </div>
      </div>
    </div>
  </section>


  <script src="../assets/js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js"></script>
  <script src="../assets/js/aos.js"></script>
  <script src="../assets/js/scripts.js"></script>
  <script>

  function stringGen(len) {
    var text = "";
    var charset = "abcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < len; i++)
      text += charset.charAt(Math.floor(Math.random() * charset.length));
    return text;
  }

  function notify(msg, mode) {
    var classy = stringGen(9);
    $('body').append(`<div id='${classy}' class='alert notification is-${mode} ani2 slideInRight'>${msg}</div>`)
    setTimeout(function() {
      $(`#${classy}`).removeClass('slideInRight');
      $(`#${classy}`).addClass('slideOutRight');
      setTimeout(function() {
        $(`#${classy}`).remove();
      }, 3000);
    }, 3000);
  }
  function get_all_gigs(){
    $.ajax({
      type: "GET",
      url: 'get1.php',
      success: function(data) {
        $('#gigs').val(data);
        var splits= data.split(/\r|\n/);
        $.each(splits, function(i, item) {
          var items = item.split('|');
          var date = items[0];
          var location = items[1];
          //console.log(date, location);
          if (location != undefined) {
            $('#gigs').append(`
              <div class="field is-grouped ani fadeInUp">
                <div class="control is-expanded">
                  <input class="input gig_date" type="text" value="${date}">
                </div>
                <div class="control is-expanded">
                  <input class="input gig_location" type="text" value="${location}">
                </div>
              </div>
            `);
          }

        });
      },
      error: function(error) {
        console.log(error);
      }
    });
  }

  $.ajax({
    type: "GET",
    url: 'get2.php',
    success: function(data) {
      var data = JSON.parse(data);
      $('#title').val(data.title);
      $('#description').val(data.desc);
      $('#facebook').val(data.fb);
      $('#instagram').val(data.ig);
      $('#twitter').val(data.tw);
      $('#bandcamp').val(data.bc);
    },
    error: function(error) {
      console.log(error);
    }
  });

  $("#settings_btn").click(function() {
    $(".settings").toggle();
  });

  $("#save").click(function() {
    var all_gigs = [];
    $('input.gig_date').each(function(){
      var date = $(this).val();
      var location = $(this).parent().parent().find('.gig_location').val();
       if (date.length && location.length) {
         all_gigs.push({'date': date, 'location': location})
       }
    });
    $('.field').removeClass('fadeInUp');
    $('.field').addClass('fadeOutDown');
    $.ajax({
      type: "POST",
      url: 'save.php',
      data: {
        'gigs': all_gigs
      },
      success: function(data) {
        notify('Gigs saved', 'white');
        setTimeout(function(){
          $('#gigs').html(`
            <div class="field is-grouped ani fadeInDown">
              <div class="control is-expanded">
                <input class="input gig_date" type="text" placeholder="date">
              </div>
              <div class="control is-expanded">
                <input class="input gig_location" type="text" placeholder="location">
              </div>
            </div>
          `);
          get_all_gigs();
        }, 1000);
      },
      error: function(error) {
        console.log(error);
      }
    });
  });

  get_all_gigs();

  </script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <?php
    } ?>


</body>

</html>
