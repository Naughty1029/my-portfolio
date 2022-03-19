export const SitePage: React.VFC = () => {
    return (
        <main id="about">
            <p className="title">This Site</p>
            <p className="message">このポートフォリオサイトについて紹介します。</p>
            <p className="subtitle">コンセプト</p>
            <p className="message">
                コンセプトは「1990年代のYahooトップページ」です。
                <br />
                1990年代、当時小学生だったわたしはパソコンルームで初めてWEBに触れました。「Yahooの検索エンジン」です。文字を入力して、検索ボタンを押したら結果が返ってくる。たったそれだけですが、初めてしたインタラクティブな体験に感動したことをいまでも鮮明に覚えています。
                <br />
                当時の感動を忘れずに、また今後は自分もそんな感動を届けていきたいという想いを当ポートフォリオのコンセプトに落とし込みました。
            </p>
            <p className="subtitle">使用技術</p>
            <p className="message">
                当ポートフォリオは以下の技術で作られています。
                <br />
                React / TypeScript / Laravel
                <br />
            </p>
        </main>
    )
}
