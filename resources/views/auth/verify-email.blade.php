<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
           サインアップしていただきありがとうございます！始める前に、メールで送信したリンクをクリックして、メールアドレスを確認していただけますか？
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                登録時に指定したメールアドレスに新しい確認リンクが送信されました。
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        確認メールを再送
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                   ログアウト
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
