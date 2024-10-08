# チャプター7 ワーク課題7-1-1
以下の設問についての解答を、各設問の下の行に書くこと。

## 設問1.
> 要件定義では、顧客から指示された要望をそのまま形にするだけでは望ましくない。
> それはなぜか。また、顧客とどのように話し合い要件定義をするべきか。

その要求が実現で切るかどうかを判断し、適切な開発スケジュールを立てること、解決策を導くことが求められるから。

顧客とは要求に優先順位をつけて話し合う。要件は大きく「必須要件」と「希望要件」の2つに分かれる。このように詳細な要求と要件が固まれば、全体のスケジュールが把握しやすくなるから。


## 設問2.
> ウォーターフォール開発手法の、アジャイル開発手法にないメリットは何か。
成果物が明確になっておりやるべきことが事前に決定しているため、開発の計画や予算の見積もりがしやすい
工程ごとに業務内容が決まっているため、工程単位で人材を投入することができるため、その特徴を持った人材育成・採用をしやすい。


> また、アジャイル開発のウォーターフォール開発にないメリットは何か。

仕様を開発を進めながら決定できたり、柔軟な変更が可能
短期間の開発も可能
機能ごとに小単位で開発を進めることができる



## 設問3.
> システム開発のプロジェクトにおいて、「アプリに使用する言語」は、要件定義・基本設計・詳細設計・開発・テストのうち、
> どの段階で決定するか。また、その理由はなぜか。

段階:要件定義
理由:アプリケーションの要件や仕様が明確になると、どのプログラミング言語が最も適切かを考えるための基礎が整うから。


## 設問4.
> ホワイトボックステストとブラックボックステストの違いは何か。それぞれのテストのテスト内容と目的について述べよ。

ブラックボックステストの内容:内部の実装にかかわらず、ソフトウェアの機能とその入力・出力に基づいてテストを行うこと


ブラックボックステストの目的:ソフトウェアがユーザーの期待に応え、仕様通りに機能するかを確認すること。
内部の構造や実装に依存せず、機能要件に基づいてテストを行うことで、ユーザーの視点からそうとウェアの品質を評価することができる。


ホワイトボックステストの内容:内部のロジックや構造を理解し、その内部の動作をテストすること


ホワイトボックステストの目的:ソフトウェアの内部ロジックや構造を詳細に確認し、コードの正確性、効率性、セキュリティを検証すること。ソフトウェアの内部動作を徹底的にチェックすることで、品質の向上とバグの早期発見を目指すこと。


## 設問5.
> 単体テストと結合テストの違いは何か。それぞれのテストのテスト内容と目的について述べよ。

単体テストの内容:ソフトウェアの個々のコンポーネントやモジュールを独立してテストする方法


単体テストの目的:各モジュールや関するが正しく実装されているか、仕様通り動作するかを確認。また、早い段階でバグを発見し修正することで、テスト段階での問題を減少させることができる。


結合テストの内容:ソフトウェアの複数のコンポーネントやモジュールが結合された状態でテストする方法


結合テストの目的:個々のモジュールが結合された際に、正しく連携し、正しく動作するか確認したりする


## 設問6.
> 受け入れテストの目的は何か。

ソフトウェアがユーザーや顧客の期待に応え、仕様や要件を満たしているかを確認すること。これにより、ソフトウェアのリリースに向けた最終確認を行い、顧客の承認を得るとともに、最終的な品質保証を実施する。


## 設問7.
> テストを実施して、テストケースの一部が失敗していた場合、該当機能を修正した後、それに関わる全ての機能を再テストする。
> それはなぜか。

修正作業が原因で新たなバグが発生することがあるため、、ほかの機能が正しく動作るるのかを確認することで、新しい問題に早期発見し、対処できる。
また、顧客との信頼性を確保するためでもある。