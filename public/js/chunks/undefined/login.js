(self["webpackChunk"] = self["webpackChunk"] || []).push([["login"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/api/LoginApi.vue?vue&type=script&lang=js":
/*!***********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/api/LoginApi.vue?vue&type=script&lang=js ***!
  \***********************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  /* data() {
      return {
          data: [],
      };
  },
  methods: {
      api(data) {
          axios.get("/sanctum/csrf-cookie").then((response) => {
              axios
                  .post("/api/login", data)
                  .then((response) => {
                      this.data = response;
                  })
                  .catch((error) => {
                      console.log("error");
                  });
          });
      },
  }, */
  setup: function setup() {
    var _this = this;

    var articles = (0,vue__WEBPACK_IMPORTED_MODULE_0__.ref)([]);
    var searchParameters = (0,vue__WEBPACK_IMPORTED_MODULE_0__.ref)([]);
    (0,vue__WEBPACK_IMPORTED_MODULE_0__.onMounted)(function () {
      _this.articles = ArticlesAPI.loadArticles();
    });

    var searchArticles = function searchArticles(id) {
      return articles.filter(function () {// Some search codes
      });
    };

    return {
      articles: articles,
      searchParameters: searchParameters,
      searchArticles: searchArticles
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/pages/Login.vue?vue&type=script&lang=js":
/*!**********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/pages/Login.vue?vue&type=script&lang=js ***!
  \**********************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _api_LoginApi__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../api/LoginApi */ "./resources/js/vue/api/LoginApi.vue");

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      formData: {
        email: "",
        password: ""
      },
      api: {}
    };
  },
  methods: {
    handleLogin: function handleLogin() {
      api = _api_LoginApi__WEBPACK_IMPORTED_MODULE_0__.default.methods.api(this.formData);
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/pages/Login.vue?vue&type=template&id=e64450b2":
/*!**************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/pages/Login.vue?vue&type=template&id=e64450b2 ***!
  \**************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* binding */ render
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");


var _hoisted_1 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("link", {
  rel: "stylesheet",
  href: "/css/login.css"
}, null, -1
/* HOISTED */
);

var _hoisted_2 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("div", {
  "class": "logo-wrapper"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("img", {
  src: "/img/random-logo_red.png"
})], -1
/* HOISTED */
);

var _hoisted_3 = {
  "class": "container container-fluid card login-wrapper text-center"
};

var _hoisted_4 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("div", {
  "class": "welcome-text"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("h3", {
  "class": "title"
}, "Welcome Back"), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("p", {
  "class": "subtitle"
}, "Please log in to continue")], -1
/* HOISTED */
);

var _hoisted_5 = {
  "class": "form-group custom-input"
};

var _hoisted_6 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("span", {
  "class": "form-icon"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("i", {
  "class": "fas fa-user"
})], -1
/* HOISTED */
);

var _hoisted_7 = {
  "class": "form-group custom-input"
};

var _hoisted_8 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("span", {
  "class": "form-icon"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("i", {
  "class": "fas fa-key"
})], -1
/* HOISTED */
);

var _hoisted_9 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("button", {
  type: "submit",
  "class": "btn btn-danger text-bold float-right",
  style: {
    "min-width": "50%"
  }
}, " Log In ", -1
/* HOISTED */
);

var _hoisted_10 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("a", {
  href: "",
  "class": "forgot-password-link"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("span", null, "Forgot Password")], -1
/* HOISTED */
);

function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("<div class=\"container\">\r\n    <div class=\"d-flex justify-content-center h-100\">\r\n      <div class=\"card\">\r\n        <div class=\"card-header\">\r\n          <h3>Sign In</h3>\r\n          <div class=\"d-flex justify-content-end social_icon\">\r\n            <span><i class=\"fab fa-facebook-square\"></i></span>\r\n            <span><i class=\"fab fa-google-plus-square\"></i></span>\r\n            <span><i class=\"fab fa-twitter-square\"></i></span>\r\n          </div>\r\n        </div>\r\n        <div class=\"card-body\">\r\n          <form action=\"#\" @submit.prevent=\"handleLogin\">\r\n            <div class=\"input-group form-group\">\r\n              <div class=\"input-group-prepend\">\r\n                <span class=\"input-group-text\"\r\n                  ><i class=\"fas fa-user\"></i\r\n                ></span>\r\n              </div>\r\n              <input\r\n                type=\"email\"\r\n                class=\"form-control\"\r\n                placeholder=\"Email\"\r\n                v-model=\"formData.email\"\r\n              />\r\n            </div>\r\n            <div class=\"input-group form-group\">\r\n              <div class=\"input-group-prepend\">\r\n                <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>\r\n              </div>\r\n              <input\r\n                type=\"password\"\r\n                class=\"form-control\"\r\n                placeholder=\"password\"\r\n                v-model=\"formData.password\"\r\n              />\r\n            </div>\r\n            <div class=\"row align-items-center remember\">\r\n              <input type=\"checkbox\" />Remember Me\r\n            </div>\r\n            <div class=\"form-group\">\r\n              <input\r\n                type=\"submit\"\r\n                value=\"Login\"\r\n                class=\"btn float-right login_btn\"\r\n              />\r\n            </div>\r\n          </form>\r\n        </div>\r\n        <div class=\"card-footer\">\r\n          <div class=\"d-flex justify-content-center links\">\r\n            Don't have an account?<a href=\"#\">Sign Up</a>\r\n          </div>\r\n          <div class=\"d-flex justify-content-center\">\r\n            <a href=\"#\">Forgot your password?</a>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </div>"), _hoisted_1, _hoisted_2, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("div", _hoisted_3, [_hoisted_4, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("form", {
    action: "#",
    onSubmit: _cache[3] || (_cache[3] = (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function () {
      return $options.handleLogin && $options.handleLogin.apply($options, arguments);
    }, ["prevent"]))
  }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("div", _hoisted_5, [_hoisted_6, (0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("input", {
    type: "text",
    "class": "form-control",
    placeholder: "Username",
    "onUpdate:modelValue": _cache[1] || (_cache[1] = function ($event) {
      return $data.formData.email = $event;
    })
  }, null, 512
  /* NEED_PATCH */
  ), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, $data.formData.email]])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("div", _hoisted_7, [_hoisted_8, (0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)("input", {
    type: "password",
    "class": "form-control",
    placeholder: "Password",
    "onUpdate:modelValue": _cache[2] || (_cache[2] = function ($event) {
      return $data.formData.password = $event;
    })
  }, null, 512
  /* NEED_PATCH */
  ), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, $data.formData.password]])]), _hoisted_9], 32
  /* HYDRATE_EVENTS */
  ), _hoisted_10])], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./resources/js/vue/api/LoginApi.vue":
/*!*******************************************!*\
  !*** ./resources/js/vue/api/LoginApi.vue ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _LoginApi_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./LoginApi.vue?vue&type=script&lang=js */ "./resources/js/vue/api/LoginApi.vue?vue&type=script&lang=js");


/* hot reload */
if (false) {}

_LoginApi_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__.default.__file = "resources/js/vue/api/LoginApi.vue"

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_LoginApi_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__.default);

/***/ }),

/***/ "./resources/js/vue/pages/Login.vue":
/*!******************************************!*\
  !*** ./resources/js/vue/pages/Login.vue ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
/* harmony import */ var _Login_vue_vue_type_template_id_e64450b2__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Login.vue?vue&type=template&id=e64450b2 */ "./resources/js/vue/pages/Login.vue?vue&type=template&id=e64450b2");
/* harmony import */ var _Login_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Login.vue?vue&type=script&lang=js */ "./resources/js/vue/pages/Login.vue?vue&type=script&lang=js");



_Login_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__.default.render = _Login_vue_vue_type_template_id_e64450b2__WEBPACK_IMPORTED_MODULE_0__.render
/* hot reload */
if (false) {}

_Login_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__.default.__file = "resources/js/vue/pages/Login.vue"

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_Login_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__.default);

/***/ }),

/***/ "./resources/js/vue/api/LoginApi.vue?vue&type=script&lang=js":
/*!*******************************************************************!*\
  !*** ./resources/js/vue/api/LoginApi.vue?vue&type=script&lang=js ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => /* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_LoginApi_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__.default
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_LoginApi_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./LoginApi.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/api/LoginApi.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/vue/pages/Login.vue?vue&type=script&lang=js":
/*!******************************************************************!*\
  !*** ./resources/js/vue/pages/Login.vue?vue&type=script&lang=js ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => /* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Login_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__.default
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Login_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Login.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/pages/Login.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/vue/pages/Login.vue?vue&type=template&id=e64450b2":
/*!************************************************************************!*\
  !*** ./resources/js/vue/pages/Login.vue?vue&type=template&id=e64450b2 ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => /* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Login_vue_vue_type_template_id_e64450b2__WEBPACK_IMPORTED_MODULE_0__.render
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Login_vue_vue_type_template_id_e64450b2__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Login.vue?vue&type=template&id=e64450b2 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/vue/pages/Login.vue?vue&type=template&id=e64450b2");


/***/ })

}]);