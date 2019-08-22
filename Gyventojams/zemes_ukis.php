

<html>
    <head>
      <title>Parduodama žemės ūkio technika</title>
      <style>
      .btn:focus, .btn:active, button:focus, button:active {
    outline: none !important;
    box-shadow: none !important;
  }

  #image-gallery .modal-footer{
    display: block;
  }

  .thumb{
    margin-top: 15px;
    margin-bottom: 15px;
  }
  </style>
    </head>
      <body>
<h2>Parduodama žemės ūkio technika</h2>
<div class="row">
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
   data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
   data-target="#image-gallery">
  <img class="img-thumbnail"
     src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
     alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
   data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
   data-target="#image-gallery">
  <img class="img-thumbnail"
     src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
     alt="Another alt text">
</a>
</div>

<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
   data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
   data-target="#image-gallery">
  <img class="img-thumbnail"
     src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
     alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
   data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
   data-target="#image-gallery">
  <img class="img-thumbnail"
     src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
     alt="Another alt text">
</a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
   data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
   data-target="#image-gallery">
  <img class="img-thumbnail"
     src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
     alt="Another alt text">
</a>
</div>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="image-gallery-title"></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
        </button>

        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
        </button>
        <br><br>

        <div class="row">
          <div class="col-lg-3">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "upyna";

                    // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                else {
                //echo "Connected successfully";
                $conn->query("SET NAMES 'utf8'");
                }


                $sql = "SELECT pavadinimas, paskirtis, kaina, aprasymas, telefonas, id FROM z_technika where id = '1'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_assoc($result)
                    ?>
                    <h2>Technikos duomenys:</h2>
                    <strong>Technikos pavadinimas: </strong><?php echo $row["pavadinimas"]?><br>
                    <strong>Paskirtis: </strong><?php echo $row["paskirtis"]?><br>
                    <strong>Kaina: </strong><?php echo $row["kaina"]?><br>
                    <strong>Telefonas: </strong><?php echo $row["telefonas"]?><br>
                      </div>
                      <div class="offset-1 col-lg-8">
                        <h2>Technikos aprašymas</h2>
                        <strong>Aprašymas: </strong><?php echo $row["aprasymas"]?><br>
                      </div>
                    <?php
                  } else {
                  echo "0 results";
                }
                mysqli_close($conn);
                ?>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</body>
</html>
<script>
let modalId = $('#image-gallery');

$(document)
.ready(function () {

loadGallery(true, 'a.thumbnail');

//This function disables buttons when needed
function disableButtons(counter_max, counter_current) {
$('#show-previous-image, #show-next-image')
  .show();
if (counter_max === counter_current) {
  $('#show-next-image')
    .hide();
} else if (counter_current === 1) {
  $('#show-previous-image')
    .hide();
}
}

/**
*
* @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
* @param setClickAttr  Sets the attribute for the click handler.
*/

function loadGallery(setIDs, setClickAttr) {
let current_image,
  selector,
  counter = 0;

$('#show-next-image, #show-previous-image')
  .click(function () {
    if ($(this)
      .attr('id') === 'show-previous-image') {
      current_image--;
    } else {
      current_image++;
    }

    selector = $('[data-image-id="' + current_image + '"]');
    updateGallery(selector);
  });

function updateGallery(selector) {
  let $sel = selector;
  current_image = $sel.data('image-id');
  $('#image-gallery-title')
    .text($sel.data('title'));
  $('#image-gallery-image')
    .attr('src', $sel.data('image'));
  disableButtons(counter, $sel.data('image-id'));
}

if (setIDs == true) {
  $('[data-image-id]')
    .each(function () {
      counter++;
      $(this)
        .attr('data-image-id', counter);
    });
}
$(setClickAttr)
  .on('click', function () {
    updateGallery($(this));
  });
}
});

// build key actions
$(document)
.keydown(function (e) {
switch (e.which) {
case 37: // left
  if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
    $('#show-previous-image')
      .click();
  }
  break;

case 39: // right
  if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
    $('#show-next-image')
      .click();
  }
  break;

default:
  return; // exit this handler for other keys
}
e.preventDefault(); // prevent the default action (scroll / move caret)
});

</script>
