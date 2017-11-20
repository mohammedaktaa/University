/**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsText($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$placeholder='',$type='text',$lang='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }
        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function thText($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$placeholder='',$type='text',$lang='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }
        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsTextArea($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$rows=8,$cols=20,$placeholder='',$isTextEditor=false,$lang='',$value=null)
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }
        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function thTextArea($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$rows=8,$cols=20,$placeholder='',$isTextEditor=false,$lang='',$value=null)
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }
        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsAutocomplete($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$url,$multi,$placeholder='',$lang='' ,$dataAttr,$param,$letters=3)
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }
        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function thAutocomplete($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$url,$multi,$placeholder='',$lang='' ,$dataAttr,$param,$letters=3)
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }
       /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsImageUpload($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$lang='',$fileUrl='',$fileName='',$type="image",$attr='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }
        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function thImageUpload($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$lang='',$fileUrl='',$fileName='',$type="image",$attr='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }
        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param string $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $type
         * @param string $lang
         * @param bool $inline
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsDocUpload($contClass='col_full',$id,$label=false,$class='',$required=false,$name,$errorMsg='validation.custom.required',$lang='',$fileUrl='',$fileName='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param bool $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param string $lang
         * @param string $value
         * @param string $fileName
         * @return \Illuminate\Support\HtmlString
         */
        public static function thDocUpload($contClass='col_full', $id, $label=false, $class='', $required=false, $name, $errorMsg='validation.custom.required',  $lang='', $fileUrl='', $fileName='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param bool $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param $dataAttr
         * @param string $lang
         * @return \Illuminate\Support\HtmlString
         */
        public static function thSelect($contClass='col_full', $id, $label=false, $class='', $required=false, $name, $errorMsg='validation.custom.required',  $dataAttr, $lang='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @param bool $required
         * @param $name
         * @param string $errorMsg
         * @param string $placeholder
         * @param $dataAttr
         * @param string $lang
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsSelect($contClass='col_full', $id, $label=false, $class='', $required=false, $name, $errorMsg='validation.custom.required', $placeholder='', $dataAttr, $lang='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsButton($contClass='col_full', $id, $label=false, $class='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param string $contClass
         * @param $id
         * @param bool $label
         * @param string $class
         * @return \Illuminate\Support\HtmlString
         */
        public static function thButton($contClass='col_full', $id, $label=false, $class='')
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param array $extraData
         * @param bool $extraTags
         * @param bool $extraDate
         * @param bool $extraCountry
         * @param bool $extraStateCity
         * @param bool $extraAddress
         * @param bool $extraImage
         * @param null $extraContClass
         * @return \Illuminate\Support\HtmlString
         */
        public static function thArticle($extraData=[],$extraTags=false, $extraCountry=false, $extraImage=false,$extraContClass=null)
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param array $extraData
         * @param bool $extraTags
         * @param bool $extraDate
         * @param bool $extraCountry
         * @param bool $extraStateCity
         * @param bool $extraAddress
         * @param bool $extraImage
         * @param null $extraContClass
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsArticle($extraData=[],$extraTags=false, $extraCountry=false,  $extraImage=false,$extraContClass=null)
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param string $contClass
         * @param bool $required
         * @return \Illuminate\Support\HtmlString
         */
        public static function bsLocation($contClass='col-sm-12', $required=false)
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }

        /**
         * @param string $contClass
         * @param bool $required
         * @return \Illuminate\Support\HtmlString
         */
        public static function thLocation($contClass='col-sm-12', $required=false)
        {
            return \Collective\Html\FormBuilder::toHtmlString('');
        }