<div class="col-lg-4 col-xl-3 col-md-12">
    <div class="card mg-b-20 mg-md-b-0 ">
        <div class="card-body">
            <div class="main-content-left main-content-left-mail">
                <a class="btn btn-main-primary btn-compose" href="" id="btnCompose">Compose</a>
                <div class="main-mail-menu">
                    <nav class="nav main-nav-column mg-b-20">
                        <a class="nav-link {{request()->is('inbox') ? 'active' : '' }}" href="{{route('mails.index')}}"><i class="bx bxs-inbox"></i> Inbox
                            <span>20</span></a> <a class="nav-link {{request()->is('stared') ? 'active' : '' }}" href="{{route('mails.stared')}}"><i class="bx bx-star"></i> Starred
                            <span>3</span></a> <a class="nav-link {{request()->is('important') ? 'active' : '' }}" href="{{route('mails.important')}}"><i class="bx bx-bookmarks"></i> Important
                            <span>10</span></a> <a class="nav-link {{request()->is('sent') ? 'active' : '' }}" href="{{route('mails.sent')}}"><i class="bx bx-send"></i> Sent Mail
                            {{-- <span>8</span></a> <a class="nav-link" href=""><i class="bx bx-edit"></i> Drafts --}}
                            {{-- <span>15</span></a> <a class="nav-link" href="{{route('mails.spam')}}"><i class="bx bx-message-error"></i> Spam --}}
                            <span>128</span></a> <a class="nav-link {{request()->is('trashed') ? 'active' : '' }}" href="{{route('mails.trashed')}}"><i class="bx bx-trash"></i> Trash
                            <span>6</span></a>
                    </nav><label class="main-content-label main-content-label-sm">Label</label>
                    <nav class="nav main-nav-column mg-b-20">
                        <a class="nav-link" href="#"><i class="bx bx-folder-open"></i> Social <span>10</span></a> <a
                            class="nav-link" href="#"><i class="bx bx-folder"></i> Promotions <span>22</span></a> <a
                            class="nav-link" href="#"><i class="bx bx-folder-plus"></i> Updates <span>17</span></a>
                    </nav><label class="main-content-label main-content-label-sm">Tags</label>
                    <nav class="nav main-nav-column">
                        <a class="nav-link" href="#"><i class="bx bxl-twitter"></i> Twitter <span>2</span></a> <a
                            class="nav-link" href="#"><i class="bx bxl-github"></i> Github <span>32</span></a> <a
                            class="nav-link" href="#"><i class="bx bxl-google-plus"></i> Google <span>7</span></a>
                    </nav>
                </div><!-- main-mail-menu -->
            </div>
        </div>
    </div>
</div>
