

<section class="systemselectiondiv">
    <div class="systemselectionheadlinediv othersystemsheadlinediv">
    </div>
        @foreach($systems as $system)
            <div class="systemselectionoptionsmaindiv othersystemsoptionsmaindiv">
                <div class="systemselectionoptionsdiv othersystems{{$system->system}}div othersystemsoptionsdiv">
                    <div class="systemselectionpicdiv othersystemspicdiv">
                            <a  href="/bemalservice/{{$system->system}}"><img class="systemselectionpic othersystemspic" src="..\images\systems\{{$system->system}}.jpg"></a>
                    </div>
                    <div class="systemselectionpriceinfodiv othersystemspriceinfodiv">
                        {{--in der DB nach dem niedrigstens preis des systems gucken sowie dem höchsten--}}
                    </div>
                    <div class="systemselectionlink othersystemslink">
                    </div>
                </div>
            </div>
        @endforeach
</section>