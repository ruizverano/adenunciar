function googleTranslateElementInit() {
    new google.translate.TranslateElement(
      {
        pageLanguage: 'es',
        includedLanguages: 'en,es,pt,fr,de,ja',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false
      },
      'google_translate_element'
    );
  }