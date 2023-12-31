var app = getApp();
Page({
  data: {
    user: ''
  },

  onLoad: function (options) {
    var that = this;
    that.setData({
      wx_name: app.globalData.userInfo.nickName,
      headimgurl: app.globalData.userInfo.avatarUrl
    })
    wx.request({
      url: app.d.laikeUrl + '&action=user&m=share',
      method: 'post',
      data: {
        n: that.options.n,
        id: that.options.id,
        openid: app.globalData.userInfo.openid
      },
      header: { 
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
        var status = res.data.status
        if (status == 1) {
          that.setData({
            text: res.data.text,
            wishing: res.data.wishing
          })
        } else {
          that.setData({
            text: res.data.text,
            wishing: res.data.wishing
          })
        }
      },
      error: function (e) {
        wx.showToast({
          title: '网络异常！',
          duration: 2000,
        });
      },
    });
  },
 
  close: function () {
    wx.navigateBack({
      delta: 2
    })
  }
})