<div class="main-mail-compose">
    @php
        $emails = \Ziainnovation\Mailbox\Http\Models\useremail::all();

    @endphp
    <div>
        <div class="container">
            <div class="main-mail-compose-box">
                <div class="main-mail-compose-header">
                    <span>New Message</span>
                    <nav class="nav">
                        <a class="nav-link" href=""><i class="fas fa-minus"></i></a> <a class="nav-link" href=""><i class="fas fa-compress"></i></a> <a class="nav-link" href=""><i class="fas fa-times"></i></a>
                    </nav>
                </div>
                <form action="{{route('mails.send')}}" method="post">
                    @csrf
                    <div class="main-mail-compose-body">
                        <div class="form-group">
                            <label class="form-label">To</label>
                            <div>
                                {{-- <input class="form-control" placeholder="Enter recipient's email address" type="text"> --}}
                                <select name="receiver" id="" class="form-control">
                                    <option value="">-- Select Recipent --</option>
                                    @foreach ($emails as $item)
                                        <option value="{{$item->email}}">{{$item->user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <div>
                                <input name="subject" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Write your message here..." rows="8"></textarea>
                        </div>
                        <div class="form-group mg-b-0">
                            <nav class="nav">
                                <a class="nav-link" data-toggle="tooltip" href="" title="Add attachment"><i class="fas fa-paperclip"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add photo"><i class="far fa-image"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add link"><i class="fas fa-link"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Emoticons"><i class="far fa-smile"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Discard"><i class="far fa-trash-alt"></i></a>
                            </nav>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
