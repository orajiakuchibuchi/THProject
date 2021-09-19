$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
const showRegisterTab = (element) => {
  $('#lateText').hide();
  $('#uploadText').hide();
  $('#earlyText').hide();
  $('#registerText').show();
  $(element).parent().addClass('active');
  $(element).parent().siblings().removeClass('active');
};

const showEarlyTab = (element) => {
  $('#lateText').hide();
  $('#uploadText').hide();
  $('#registerText').hide();
  $('#earlyText').show();
  $(element).parent().addClass('active');
  $(element).parent().siblings().removeClass('active');
};

const showLateTab = (element) => {
  $('#lateText').show();
  $('#uploadText').hide();
  $('#registerText').hide();
  $('#earlyText').hide();
  $(element).parent().addClass('active');
  $(element).parent().siblings().removeClass('active');
};

const showUploadTab = (element) => {
  $('#lateText').hide();
  $('#uploadText').show();
  $('#earlyText').hide();
  $('#registerText').hide();
  $(element).parent().addClass('active');
  $(element).parent().siblings().removeClass('active');
};

const showFirstPage = () => {
  const element = $('#page1');
  element.show();
  element.siblings().hide();
  $('#page3').hide();
  $('#page4').hide();
  const currentTab = $('#content__section4__tab1');
  currentTab.addClass('btn__active');
  currentTab.siblings().removeClass('btn__active');
};

const showSecondPage = () => {
  const element = $('#page2');
  element.show();
  element.siblings().hide();
  $('#page3').hide();
  $('#page4').hide();
  const currentTab = $('#content__section4__tab2');
  currentTab.addClass('btn__active');
  currentTab.siblings().removeClass('btn__active');
};

const readyThirdPage = (data) => {
  const element = $('#page3');
  const tab1 = document.getElementById('content__section4__tab1');
  tab1.onclick = null;
  element.show();
  $(`#page1`).hide();
  $('#page2').hide();
  $('#page4').hide();
  $('#confirmFirstname').val(data.data.first_name)
  $('#confirmLastname').val(data.data.last_name)
  $('#confirmEmail').val(data.data.email)
  $('#confirmPhone').val(data.data.mobile_no)
  $('#user').val(data.data.id)
  const currentTab = $('#content__section4__tab3');
  currentTab.addClass('btn__active');
  currentTab.siblings().removeClass('btn__active');
}

const registerUser = () => {
  const image = $('#upload_button')[0].files[0]
  let payload = new FormData();
  payload.append('first_name', $('#firstName').val());
  payload.append('last_name', $('#lastName').val());
  payload.append('email', $('#email').val());
  payload.append('mobile_no', $('#phone').val());
  payload.append('gender', $('input[name=gender]:checked').val());
  payload.append('age', $('input[name=age]:checked').val());
  payload.append('nationality', $('input[name=nationality]:checked').val());
  payload.append('i_am', $('#intro').val());
  payload.append('consider_myself', $('#consider').val());
  payload.append('ig_handle', $('#instagram').val());
  payload.append('ig_followers', $('#followers').val());
  payload.append('avatar', image);

  $.ajax({
    url: 'sayuncle/new-register',
    processData: false,
    contentType: false,
    enctype: 'multipart/form-data',
    method: 'POST',
    data: payload,
    success: function (data) {
      readyThirdPage(data);
    },
    error: function (err) {
      if (err.status === 422) {
        $.alert({
          title: 'Error Occurred',
          content: err.responseJSON.errors.email ? err.responseJSON.errors.email[0] : 'All fields are required!',
          theme: 'supervan'
        });
        return;
      }
      $.alert({
        title: 'Error Occurred',
        content: 'An unexpected error occurred please check your form and retry',
        theme: 'supervan'
      })
    }
  })
}

const showThirdPage = async () => {
 $('.loading').show()
  registerUser();
  setTimeout(() => {
    $('.loading').hide();
  }, 1000);
};

const showFourthPage = () => {
  const element = $('#page4');
  element.show();
  $('#page1').hide();
  $('#page2').hide();
  $('#page3').hide();
  const currentTab = $('#content__section4__tab4');
  currentTab.addClass('btn__active');
  currentTab.siblings().removeClass('btn__active');
};

var vid = $('#my_video').RTOP_VideoPlayer({
  // showFullScreen: true,
  // showTimer: true,
  showSoundControl: true
});

$(".rtopVideoHolder ").append('<i class="center_play_icon"></i>');

const showSideBar = () => {
  const sideBar = document.getElementById('sideBar');
  sideBar.style.left = '0%';
}
const hideSideBar = () => {
  const sideBar = document.getElementById('sideBar');
  sideBar.style.left = '100%';
}
