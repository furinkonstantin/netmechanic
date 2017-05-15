						<section class="page-block  double-space-top double-space-bottom animation" data-animation="zoomIn" id="contact_form">
							<div class="container">
								<div class="page-heading center"><h3 class="heading">Связаться с нами<span></span></h3></div>
								<div class="row">
									<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
										<form method="post" class="contact-form" name="contact-form" id="contact-form">
											<div class="row">
												<div class="form-group col-md-12 col-sm-12">
													<label class="sr-only" for="FormEmail"></label>
													<input class="form-control input-lg" type="email" name="email" id="FormEmail" placeholder="Укажите email" required>
												</div>
												<div class="form-group col-md-12 col-sm-12">
													<label class="sr-only" for="FormMessage"></label>
													<textarea class="form-control input-lg" name="message" id="FormMessage" rows="5" placeholder="Введите сообщение, укажите насколько это срочно и как лучше с Вами связаться" required></textarea>
												</div>
											</div>
											<input class="btn btn-md btn-primary btn-center" type="submit" value="Отправить" onclick="postFormToGoogle()">
										</form>
										<br>
										<p>Ваши сообщения попадают в автоматизированную систему обработки сообщений. Мы на связи в круглосуточном режиме. Если Вы наш действующий клиент, то укажите свой корпоротивный email, так Вы будете идентифицированы автоматически, а значит быстрее будет выполнен запрос. Если Вы ещё не наш клиент, мы готовы прити на помощь!</p>
										<p>Действующие клиенты так же могут воспользоваться прямым телефоном службы поддержки и корпоративной системой обработки заявок.</p>
									</div>
								</div>
							</div>
						</section>
					<!-- Thank you -->
						<div class="modal fade" id="thankyou_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
										<p style="font-size: 1.125em; line-height: 1.5;" class="modal-title" id="myModalLabel">Спасибо! Ваш запрос отправлен.</p>
									</div>
									<div class="modal-body">
										Только что мы записали ваше обращение, в течении пары минут мы получим электронные письмо о новом сообщении и начнем действовать! :)
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
									</div>
								</div>
							</div>
						</div>