export const AboutPage: React.VFC = () => {
    return (
        <main id="about">
            <p className="title">About Me</p>
            <p className="message">
                はじめまして。この度はわざわざプロフィールまでご覧いただきありがとうござます。
                <br />
                このページにはわたしの経歴とスキル、そしてこれからの目標が書いてあります。どうぞお時間があるときにでも読んでくれたらうれしく思います。
                <br />
            </p>
            <p className="subtitle">経歴</p>
            <p className="message">
                青山学院大学を卒業後、ソフトバンク株式会社に入社。代理店営業として4年ほど勤務。
                <br />
                その後、家庭の事情もあり1年ほど家業である新聞配達に従事。
                <br />
                アナログな業界で過ごしたことで、より一層デジタルな世界への想いが強くなりWEB制作の学習を開始。
                <br />
                1年ほど学習をした後、家業も落ち着いたタイミングでWEB制作会社に転職。現在はエンジニア職として従事しています。
            </p>
            <p className="subtitle">スキル</p>
            <p className="message">
                実務経験あり
                <br />
                HTML5 / CSS3 / JavaScript / SCSS / jQuery / WordPress / Git / PHP / Laravel / MySQL / Vagrant など
                <br />
                実務経験なし（独学中）
                <br />
                React / AWS / Docker
            </p>
            <p className="subtitle">目標</p>
            <p className="message">
                人生の軸は「家族」です。家族を大切に、幸せにできるように自分のスキルも価値観も日々高めていけるよう考えています。
                <br />
                またエンジニアとしての目標は「幅広く、柔軟なマネジメントができる人材」になることです。29歳からエンジニア職に転身したこともあり、技術的なスキルを磨くことと同時に、過去の営業職としての経験を活かした業務に携わっていきたいと考えています。
            </p>
        </main>
    )
}
