<div class="dock">
    <div class="dock-container">
        <li class="li-1">
            <div class="name text-nowrap">Ana Sayfa</div>
            <a href="/">
                <svg class="ico" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-fill"
                    viewBox="0 0 16 16">
                    <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg>
            </a>
        </li>
        <li class="li-2">
            <div class="name">ETF</div>
            <a href="/etf">
                <img class="ico" style="width: 47px; height: 47px"
                    src="https://c7.alamy.com/comp/2H6XE55/etf-icon-exchange-traded-fund-vector-art-2H6XE55.jpg">
            </a>
        </li>
        <li class="li-3">
            <a href="/byf">
                <div class="name">BYF</div>
                <img class="ico" style="width: 47px; height: 47px" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f70853c849ec3735b52cef9_notes.png" alt="">
            </a>
        </li>
        <li class="li-4">
            <a href="fons">
                <div class="name">Fon</div>
                <img class="ico" style="width: 47px; height: 47px" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f70853a55558a68e192ee08_messages.png" alt="">
            </a>
        </li>
        <li class="li-5">
            <a href="cr/{{$fon->code}}">
                <div class="name">CR</div>
                <img class="ico" style="width: 47px; height: 47px" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f70853d44d99641ce69afeb_reminders.png" alt="">
            </a>
        </li>
        <li class="li-6">
            <a href="/stc">
                <div class="name">STC</div>
                <img class="ico" styke="width: 47px; height: 47px" src="{{ asset('/back/img/stc.png') }}">
            </a>
        </li>

    </div>
</div>
