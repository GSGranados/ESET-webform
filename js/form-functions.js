"use-strict";

$(document).ready(function (e) {
  $("#renovation").change(function (e) {
    const formUsernameName = "username";
    const formUsernamePlaceholder = "EAV-XXXXXX";
    const formLicensekeyName = "licensekey";
    const formLicensekeyPlaceholder = "XXXX-XXXX-XXXX-XXXX-XXXX";
    const typeOfForm = Number($(this).val());
    if (typeOfForm === 1 || typeOfForm === 2) {
      $("#renew_form input").slideDown("slow");
    }
    if (typeOfForm === 1) {
      $("#renew_form").attr("name", "");
      $("#renew_form").attr("name", formUsernameName);
      $("#renew_form input").attr("name", "");
      $("#renew_form input").attr("name", formUsernameName);
      $("#renew_form input").attr("placeholder", "");
      $("#renew_form input").attr("placeholder", formUsernamePlaceholder);
    } else {
      $("#renew_form").attr("name", "");
      $("#renew_form").attr("name", formLicensekeyName);
      $("#renew_form input").attr("name", "");
      $("#renew_form input").attr("name", formLicensekeyName);
      $("#renew_form input").attr("placeholder", "");
      $("#renew_form input").attr("placeholder", formLicensekeyPlaceholder);
    }
  });
});
