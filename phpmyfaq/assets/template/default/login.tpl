        <section>

            <header>
                <h2>{loginHeader}</h2>
            </header>

            [useSslForLogins]
            <p>
                <a href="{secureloginurl}">{securelogintext}</a>
            </p>
            [/useSslForLogins]

            {loginMessage}

            <form class="form-horizontal" action="{writeLoginPath}" method="post" accept-charset="utf-8" role="form">
                <input type="hidden" name="faqloginaction" value="{faqloginaction}"/>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="faqusername">{username}</label>
                    <div class="col-sm-8">
                        <input type="text" name="faqusername" id="faqusername" class="form-control" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="faqpassword">{password}</label>
                    <div class="col-sm-8">
                        <input type="password" name="faqpassword" id="faqpassword" class="form-control" required>
                        <p class="help-block">{sendPassword}</p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="faqrememberme" name="faqrememberme" value="rememberMe">
                                {rememberMe}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button class="btn btn-primary" type="submit">
                            {loginHeader}
                        </button>
                    </div>
                </div>
            </form>

        </section>