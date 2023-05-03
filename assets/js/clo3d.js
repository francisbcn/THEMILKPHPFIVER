// 2. Load CLO-SET Fitting IFrame API by loading closet_fitting_viewer_iframe_api.js

/* var tag = document.createElement('script');

tag.src = "https://storagefiles.clo-set.com/dist/fitting_viewer_iframe_api/0.0.2/closet_fitting_viewer_iframe_api.js";

var firstScriptTag = document.getElementsByTagName('script')[0];

firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);



tag.onload = () => {

  // 3. Implement your own code for each event handler

  function createAvatarHandler(event){


    //input the data (event.avatar_info and event.user_id) into your DB
    callback: ({ type: 'createAvatar', data: {avatarInfo, userId} }) => void

  }

  function changeAvatarHandler(event){

    //input the data (event.avatar_info and event.user_id) into your DB
    callback: ({ type: 'changeAvatar', data: {avatarInfo, userId} }) => void

  }

  ClosetFittingIframeAPI.addEventListener('createAvatar', createAvatarHandler)

  ClosetFittingIframeAPI.addEventListener('changeAvatar', changeAvatarHandler)



  // if needed, you can remove the event listener

  // ClosetFittingIframeAPI.removeEventListener('createAvatar', createAvatarHandler)

}

 */